    <template>


    <div class="w-full flex items-center mt-20 flex-row">

        <div class="w-full px-2">
            <Chart type="bar" :data="chart_data" :options="chart_options" />
            <p class="text-center">Note: This graph represents your style blend. </p>
            <p class="mt-10">Some people associate DISC with only 4 personality styles. However, you are a BLEND of ALL 4 personality traits that each have their own levels Please refer to the graph for your own unique style blend.</p>
        </div>
    </div>


    <div class="w-full flex mt-20 flex-row">
        <div class="w-1/2 space-y-5">
            <h1 class="text-4xl font-bold">Understanding Your Real Personality Graph</h1>
            <p>
                A dot's distance from the edge of the circle shows how naturally inclined a person is to encompass the characteristics of his or her DiSC style. A dot positioned toward the edge of the circle indicates a strong inclination toward the characteristics of the style
            </p>
        </div>
        <div class="w-1/3  relative  mx-auto" >
            <img src="/images/pie.png" alt="" style="min-width:300px; min-height:300px; max-width:300px; max-height:300px;">
            <div class="point absolute bg-black rounded-full" style="width: 10px;height: 10px;" :style="`top:${y}px; left:${x}px;`"  ></div>
        </div>
    </div>
</template>

<script>
import AssessmentTypes from "@/Layouts/AssessmentTypes.vue";
import stress_potential_levels from "@/Helpers/StressPotentialLevels.js";
import Chart from 'primevue/chart';
export default {
    name: "AssessmentGraph",
    layout: AssessmentTypes,
    components:{Chart},
    data(){
        return {
            stress_potential_levels: stress_potential_levels,
            chart_options : {
                scales: {
                    y: {
                        suggestedMax: 30
                    }
                }
            },
            chart_data:{
                labels: ['D', 'I', 'S', 'C'],
                datasets: [
                    {
                        label: 'DISC Score',
                        data: [],
                        backgroundColor: ['rgba(249, 115, 22, 0.2)', 'rgba(6, 182, 212, 0.2)', 'rgb(107, 114, 128, 0.2)', 'rgba(139, 92, 246 0.2)'],
                        borderColor: ['rgb(249, 115, 22)', 'rgb(6, 182, 212)', 'rgb(107, 114, 128)', 'rgb(139, 92, 246)'],
                        borderWidth: 1
                    }
                    ]
            },
            x:0,
            y:0
        }
    },
    props:{
        assessment: Object,
        type: String,
        graph: Object,
    },

    mounted() {
        this.chart_data.datasets[0].data=this.graph
        switch (this.type){
            case "C": this.x=60; this.y=220;break;
            case "CD": this.x=60; this.y=170;break;
            case "DC": this.x=60; this.y=120;break;
            case "D": this.x=60; this.y=65;break;

            case "S": this.x=230; this.y=220;break;
            case "SI": this.x=230; this.y=170;break;
            case "IS": this.x=230; this.y=120;break;
            case "I": this.x=230; this.y=65;break;


            case "CS": this.x=120; this.y=220;break;
            case "SC": this.x=165; this.y=220;break;


            case "DI": this.x=120; this.y=50;break;
            case "ID": this.x=170; this.y=50;break;

        }
    }
}
</script>


<style scoped>
progress.d_trait::-moz-progress-bar { background: #c7e5b6; }
progress.d_trait::-webkit-progress-value { background: #c7e5b6; }
progress.d_trait { color: #c7e5b6; }


progress.i_trait::-moz-progress-bar { background: #da8583; }
progress.i_trait::-webkit-progress-value { background: #da8583; }
progress.i_trait { color: #da8583; }

progress.s_trait::-moz-progress-bar { background: #7a9cdc; }
progress.s_trait::-webkit-progress-value { background: #7a9cdc; }
progress.s_trait { color: #7a9cdc; }


progress.c_trait::-moz-progress-bar { background: #eae65e; }
progress.c_trait::-webkit-progress-value { background: #eae65e; }
progress.c_trait { color: #eae65e; }


</style>
