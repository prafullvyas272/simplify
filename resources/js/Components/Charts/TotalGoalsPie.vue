<template>
    <div class="w-full">
        <h2 class="w-1/2 text-lg">Total Goals</h2>
    </div>
    <div class="w-full">
        <apexchart
            type="donut"
            :options="goals_chart_options"
            :series="goals_series"
        />
    </div>
</template>
<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    name: "TotalGoalsPie",
    components: { apexchart: VueApexCharts },
    data() {
        return {
            goals_series: [
                {
                    id: "c",
                    name: "Completed",
                },
                {
                    id: "i",
                    name: "In Progress",
                },
                {
                    id: "u",
                    name: "Upcoming",
                },
            ],
            total_goals: 0,
            goals_chart_options: {
                chart: {
                    type: "donut",
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    position: "bottom",
                },
                title: {
                    text: null,
                    align: "center",
                    offsetX: 0,
                    offsetY: 70,
                    floating: true,
                    style: {
                        fontSize: "32px",
                        color: "#333",
                    },
                },

                responsive: [
                    {
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200,
                            },
                            legend: {
                                position: "bottom",
                            },
                        },
                    },
                ],
            },
        };
    },
    props: {
        goals: Array,
        goals_statuses: Object,
    },

    async mounted() {
        var temp = {};
        this.goals_statuses.data.forEach((elem) => {
            temp[elem.name] = 0;
        });
        for (const [key, value] of Object.entries(this.goals)) {
            var completed = 0;
            var total = 0;

            value["task_percent"] = total ? (completed / total) * 100 : 0;

            name = this.goals_statuses.get_name(value.status);
            temp[name] += 1;
            this.total_goals += 1;
        }

        this.goals_chart_options.labels = Object.keys(temp);

        this.goals_chart_options.title.text = this.total_goals;
        this.goals_series = Object.values(temp);
    },
};
</script>

<style scoped></style>
