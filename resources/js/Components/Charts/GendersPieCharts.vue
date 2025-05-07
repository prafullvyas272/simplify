<template>
    <div class="w-full py-5">
        <apexchart type="donut"  :options="chartOptions" :series="series" :labels="this.labels" />
    </div>
</template>



<script>

import VueApexCharts from "vue3-apexcharts";
import genders from "@/Helpers/Genders.js";
export default {
    name: "GendersPieCharts",
    components: {apexchart: VueApexCharts,},
    props:{
        chart_data: Object,
    },
    data(){
        return {
            series: [],

            chartOptions: {
                chart: {
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false,
                },
                legend:{
                    position:'bottom',
                },
                labels: [],
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

            temp_data:[]
        }
    },
    mounted() {

        for (const [key, value] of Object.entries(this.chart_data)) {
            this.series.push(value)
            this.chartOptions.labels.push(genders.get_name(key))
        }

    }
}
</script>


<style scoped>

</style>
