const current_statuses = {
    data :[
        {
            id: "w",
            name: "Working"
        },
        {
            id: "s",
            name: "Studying"
        },
        {
            id: "l",
            name: "Looking for work"
        },
        {
            id: "n",
            name: "None Of The Above"
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

export default current_statuses;
