
<template>

        <div class="w-1/6 min-w-[300px] h-10   fixed bottom-0 right-10 z-10 bg-white  rounded-t-xl" :class="{'h-96': this.show}">
            <div class="w-full cursor-pointer h-5  p-5 items-center flex text-white bg-blue-300 rounded-t-xl " @click="this.show=!this.show" >
                Messages
            </div>
            <div v-show="this.show" class="w-full h-full" id="chatbox" >
                <div  id="friendslist">

                    <div class="rounded-3xl" id="friends">

                        <div class="friends rounded-xl" v-html="contacts"></div>

                    </div>

                </div>
                <div  id="single_chat"  class="p1 hidden">
                    <div class="h-16 flex flex-row" id="profile">
                        <div class="w-1/6 hover:opacity-50 h-full cursor-pointer flex justify-center items-center"  @click="close_chat"  >
                            <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 512 512">
                                <path fill="none" stroke="white" stroke-linecap="square" stroke-miterlimit="10" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/>
                            </svg>
                        </div>
                        <div class="w-4/6 flex flex-col gap-y-2 justify-center items-center ">
                            <img  :src="current_chat_image" alt="" class="w-10 h-10  rounded-full m-auto ">
                            <span class="w-full text-center"> {{this.current_chat_name}}</span>
                        </div>
                    </div>

                    <div class="w-full">
                        <div id="chat-messages"  @scroll="check_for_top" class="text-black h-52 flex flex-col overflow-scroll">
                            <div class="w-full" v-for="message in this.messages">
                                <div class="message mt-5 flex items-center justify-start w-full px-2" :class="{'right  flex-row-reverse ': message.from_id===this.$page.props.auth.user.id }">
                                    <img class="w-5 h-5 rounded-full mx-2 flex " :src="$page.props.auth.user.avatar">
                                    <div class="bubble" :class="{'bg-purple-400 !text-white': message.from_id===this.$page.props.auth.user.id}">
                                        {{message.body}}
                                        <div class="bg-inherit"></div>
                                        <span class="hidden"> 1 min</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="sendmessage">
                        <input type="text" v-model="send_message" @keydown.enter="submit_message" />
                        <button id="send" @click="submit_message"></button>
                    </div>

                </div>
            </div>

        </div>

</template>


<script>
import "../echo.js"

export default {
    name: "ChatWidget",
    data(){
        return {
            contacts:"",
            chats:null,
            chat_window:null,
            chat_messages:null,
            single_chat:null,
            current_chat_image:"",
            current_chat_name:"",
            current_user_chat_id:null,
            messages:[],
            current_page:1,
            reached_last_message:false,
            show:false,
            send_message:"",

        }
    },
    methods:{


        submit_message(){
            axios.post(route("send.message"),{
                message: this.send_message,
                id:this.current_user_chat_id,
            }).then((response) => {

                if (response.data.status==="200"){
                    this.messages.push({
                        to_id:parseInt(this.current_user_chat_id),
                        from_id:this.$page.props.auth.user.id,
                        body:this.send_message,
                    });
                    this.send_message = "";
                }
            }).then(()=>{
                this.chat_messages.scrollTo(0, this.chat_messages.scrollHeight)
            })
        },
        check_for_top() {
            if (event.currentTarget.scrollTop === 0) {
                this.get_messages()
            }
        },

        get_messages(){

            if (!this.reached_last_message)
                axios.post(route('api.fetch.messages',{
                    per_page:6,
                    page:this.current_page,
                    id:this.current_user_chat_id
                }))
                    .then((response) => {
                        if (response.data.last_message_id){
                            this.current_page+=1
                            var temp=this.messages.slice()
                            this.messages=[]
                            this.messages.push(...response.data.messages.reverse());
                            this.messages.push(...temp);

                        }else{
                            this.reached_last_message=true
                        }
                    }).then(()=>{
                            if (this.current_page==2)
                                this.chat_messages.scrollTo(0, this.chat_messages.scrollHeight)
                            else
                                this.chat_messages.scrollTo( 0, 50)
                        })
        },
        close_chat() {
            this.chat_window.style.display = 'block';
            this.single_chat.style.display = 'none';
            this.current_chat_image=""
            this.current_chat_name=""
            this.current_user_chat_id=null
            this.messages=[]
            this.current_page=1
            this.reached_last_message=false
        },
        async open_chat() {

            this.current_user_chat_id = event.currentTarget.dataset.contact;

            this.get_messages()

            this.current_chat_image=event.currentTarget.querySelectorAll(".avatar")[0].style.backgroundImage.replace('url("','').replace('")','');
            this.current_chat_name=event.currentTarget.querySelectorAll("p")[0].childNodes[0].textContent;

            this.chat_window.style.display='none';
            this.single_chat.style.display='block';

        },
    },
    mounted() {

        axios.get(route('contacts.get'))
        .then((response) => {
           this.contacts=response.data.contacts;
        }).then((resp)=>{
            this.chats = document.querySelectorAll(".messenger-list-item");
            this.chats.forEach(chat => chat.addEventListener('click', this.open_chat))
            this.chat_window=document.getElementById("friendslist")
            this.single_chat=document.getElementById("single_chat")
            this.chat_messages=document.getElementById("chat-messages")
        });

        const channelName = "chatify." + this.$page.props.auth.user.id;

        Echo.options.auth.headers["X-CSRF-TOKEN"]= this.$page.props.csrf_token



        Echo.private(channelName)
            .listen('.messaging', (e) => {

            });




    },
}

</script>

<style scoped>

body {
    background: #f0f1f2;
    font:12px "Open Sans", sans-serif;
}
#view-code{
    color:#89a2b5;
    opacity:0.7;
    font-size:14px;
    text-transform:uppercase;
    font-weight:700;
    text-decoration:none;
    position:absolute;top:660px;
    left:50%;margin-left:-50px;
    z-index:200;
}

#topmenu{
    height:69px;
    width:290px;
    border-bottom:1px solid #d8dfe3;
}
#topmenu span{
    float:left;
    width: 96px;
    height: 70px;
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/top-menu.png") -3px -118px no-repeat;
}
#topmenu span.friends{margin-bottom:-1px;}
#topmenu span.chats{background-position:-95px 25px; cursor:pointer;}
#topmenu span.chats:hover{background-position:-95px -46px; cursor:pointer;}
#topmenu span.history{background-position:-190px 24px; cursor:pointer;}
#topmenu span.history:hover{background-position:-190px -47px; cursor:pointer;}
.friend{
    height:70px;
    border-bottom:1px solid #e7ebee;
    position:relative;
}
.friend:hover{
    background:#f1f4f6;
    cursor:pointer;
}
.friend img{
    width:40px;
    border-radius:50%;
    margin:15px;
    float:left;
}
.floatingImg{
    width:40px;
    border-radius:50%;
    position:absolute;
    top:0;
    left:12px;
    border:3px solid #fff;
}
.friend p{
    padding:15px 0 0 0;
    float:left;
    width:220px;
}
.friend p strong{
    font-weight:600;
    font-size:15px;
    color:#597a96;

}
.friend p span{
    font-size:13px;
    font-weight:400;
    color:#aab8c2;
}
.friend .status{
    background:#26c281;
    border-radius:50%;
    width:9px;
    height:9px;
    position:absolute;
    top:31px;
    right:17px;
}
.friend .status.away{background:#ffce54;}
.friend .status.inactive{background:#eaeef0;}
#search{
    background:#e3e9ed url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/search.png") -11px 0 no-repeat;
    height:60px;
    width:290px;
    position:absolute;
    bottom:0;
    left:0;
}
#searchfield{
    background:#e3e9ed;
    margin:21px 0 0 55px;
    border:none;
    padding:0;
    font-size:14px;
    font-family:"Open Sans", sans-serif;
    font-weight:400px;
    color:#8198ac;
}
#searchfield:focus{
    outline: 0;
}
#chatview{
    width:290px;
    height:484px;
    position:absolute;
    top:0;
    left:0;
    display:none;
    background:#fff;
}
#profile{
    overflow:hidden;
    text-align:center;
    color:#fff;
}
.p1 #profile{
    background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png") 0 0 no-repeat;
}
#profile .avatar{
    width:68px;
    border:3px solid #fff;
    margin:23px 0 0;
    border-radius:50%;
}
#profile  p{
    font-weight:600;
    font-size:15px;
    margin:118px 0 -1px;
    opacity:0;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#profile  p.animate{
    margin-top:97px;
    opacity:1;
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#profile  span{
    font-weight:400;
    font-size:11px;
}
#chat-messages{
    -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
    transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
}
#chat-messages label{
    color:#aab8c2;
    font-weight:600;
    font-size:12px;
    text-align:center;
    margin:15px 0;
    width:290px;
    display:block;
}
.message .bubble{
    font-size:13px;
    font-weight:600;
    padding:12px 13px;
    border-radius:5px 5px 5px 0px;
    color:#8495a3;
    position:relative;
    float:left;
}
#chat-messages div.message.right .bubble{
    float:right;
    border-radius:5px 5px 0px 5px ;
}
.bubble span{
    color: #aab8c2;
    font-size: 11px;
    position: absolute;
    right: 0;
    bottom: -22px;
}
#sendmessage{
    height:60px;
    border-top:1px solid #e7ebee;
    position:absolute;
    bottom:0;
    right:0px;
    width:290px;
    background:#fff;
    padding-bottm:50px;
}
#sendmessage input{
    background:#fff;
    margin:21px 0 0 21px;
    border:none;
    padding:0;
    font-size:14px;
    font-family:"Open Sans", sans-serif;
    font-weight:400px;
    color:#aab8c2;
}
#sendmessage input:focus{
    outline: 0;
}
#sendmessage button{
    background:#fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/send.png") 0 -41px no-repeat;
    width:30px;
    height:30px;
    position:absolute;
    right: 15px;
    top: 23px;
    border:none;
}
#sendmessage button:hover{
    cursor:pointer;
    background-position: 0 0 ;
}
#sendmessage button:focus{
    outline: 0;
}

#close{
    position:absolute;
    top: 8px;
    opacity:0.8;
    right: 10px;
    width:20px;
    height:20px;
    cursor:pointer;
}
#close:hover{
    opacity:1;
}
.cx, .cy{
    background:#fff;
    position:absolute;
    width:0px;
    top:15px;
    right:15px;
    height:3px;
    -webkit-transition: all 250ms ease-in-out;
    -moz-transition: all 250ms ease-in-out;
    -ms-transition: all 250ms ease-in-out;
    -o-transition: all 250ms ease-in-out;
    transition: all 250ms ease-in-out;
}
.cx.s1, .cy.s1{
    right:0;
    width:20px;
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
.cy.s2{
    -ms-transform: rotate(50deg);
    -webkit-transform: rotate(50deg);
    transform: rotate(50deg);
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
.cy.s3{
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
.cx.s1{
    right:0;
    width:20px;
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
.cx.s2{
    -ms-transform: rotate(140deg);
    -webkit-transform: rotate(140deg);
    transform: rotate(140deg);
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
.cx.s3{
    -ms-transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
    -webkit-transition: all 100ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
}
#chatview, #sendmessage {
    overflow:hidden;
    border-radius:6px;
}



</style>
