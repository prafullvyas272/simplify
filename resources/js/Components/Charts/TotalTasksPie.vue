<template>
    <div class="w-full">
        <h2 class="w-1/2 text-lg" > Total Tasks </h2>
    </div>
    <div class="w-full">
        <apexchart type="donut"  :options="tasks_chart_options" :series="tasks_series" />
    </div>
</template>
<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    name: "TotalTasksPie",
    components:{ apexchart: VueApexCharts,},
    data(){
        return{
            tasks_series: [],
            total_tasks:0,
            tasks_chart_options: {
                chart: {
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false,

                },
                legend:{
                    position:'bottom',
                },
                title: {
                    text: null,
                    align: 'center',
                    offsetX: 0,
                    offsetY:70 ,
                    floating: true,
                    style: {
                        fontSize: '32px',
                        color: '#333',
                    },
                },

                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]

            },
            completed_tasks:[],
            upcoming_tasks:[],
            in_progress_tasks:[],
        }
    },
    props:{
        tasks:Array,
        tasks_statuses:Object
    },

    async mounted(){
        var temp={}
        this.tasks_statuses.data.forEach((elem)=>{
            temp[elem.name]=0
        })
        for (const [key, value] of Object.entries(this.tasks)) {
            var completed=0;
            var total=0;
            value["task_percent"]= (total) ?  (completed/total) * 100: 0 ;
            switch(value.status){
                case 'u':
                    this.upcoming_tasks.push(value);
                    break;
                case 'c': this.completed_tasks.push(value);break;
                case 'i': this.in_progress_tasks.push(value);break;
            }

            name= this.tasks_statuses.get_name(value.status)
            temp[name] +=1
            this.total_tasks+=1

        }


        this.tasks_chart_options.labels=Object.keys(temp)

        this.tasks_chart_options.title.text=this.total_tasks
        this.tasks_series = Object.values(temp)
    }

}
</script>



<style scoped>

</style>
