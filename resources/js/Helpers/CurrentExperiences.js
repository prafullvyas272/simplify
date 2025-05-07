const current_experiences = {
    data :[

        {
            id: "1",
            name: "0-1 Year"
        },
        {
            id: "3",
                name: "1-3 Years"
        },
        {
            id: "5",
            name: "3-5 Years"

        },
        {
            id: "8",
            name: "5-8 Years"

        },
        {
            id: "10",
            name: "8-10 Years"

        },
        {
            id: "10+",
            name: "+10 Years"
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

export default current_experiences;
