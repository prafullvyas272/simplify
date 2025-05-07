const genders = {
    data :[
        {
            id:"m",
            name: "Male"
        },{
            id:"f",
            name: "Female"
        },{
            id:"n",
            name: "Id Rather Not To Say"
        },{
            id:"o",
            name: "Other"
        },
    ],


    get_name: function (value){
    if (value)
        return this.data.find((elem)=>{
            return elem.id === value
        }).name
    else
        return null
    },

}

export default genders;
