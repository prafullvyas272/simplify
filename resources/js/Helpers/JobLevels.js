const job_levels = {
    data :[
        {
            id:"e",
            name:"Entry Level"
        },
        {
            id:"j",
            name:"Junior"
        },
        {
            id:"m",
            name:"Mid-Level"
        },
        {
            id:"s",
            name:"Senior"
        },
        {
            id:"g",
            name:"Managerial"
        },
        {
            id:"x",
            name:"Executive"
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

export default job_levels;
