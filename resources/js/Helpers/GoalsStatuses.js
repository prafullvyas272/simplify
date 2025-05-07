const goals_statuses = {
    data :[

        {
            id:"c",
            name: "Completed"
        },{
            id:"i",
            name: "In Progress"
        },{
            id:"u",
            name: "Upcoming"
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

export default goals_statuses;
