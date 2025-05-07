

const stress_potential_levels = {
    data :[


        {
            id:"a",
            name: "Very High"
        },{
            id:"h",
            name: "High"
        },{
            id:"m",
            name: "Medium"
        },{
            id:"l",
            name: "Low"
        },{
            id:"z",
            name: "Low"
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

export default stress_potential_levels;
