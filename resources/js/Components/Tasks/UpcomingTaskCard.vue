<template>

    <div class="w-full flex flex-row  py-3 border-b-2 border-gray-300">
        <div class="w-1/3 text-md">
            {{get_date()}}
        </div>
        <div class="w-2/3">
            <h3 class="text-md  font-bold">
                {{task.name}}
            </h3>
            <h4 class="text-s">
                Assigned By: {{task.assigned_by?.name ?? "Me"}}
            </h4>
        </div>
    </div>
</template>

<script>
import days_of_week from "@/Helpers/DaysOfWeek.js";
import months from "@/Helpers/Months.js";
export default {
    name: "UpcomingTaskCard",
    data(){
        return {
            days_of_week: days_of_week,
            months: months,
        }
    },
    props:{
        task:Object
    },
    methods:{
        get_date(){

            var date_string = this.task.due_date; // Example date string
            var parts = date_string.split('-'); // Split the string by '/'
            var day = parseInt(parts[2], 10); // Extract day as integer
            var month = parseInt(parts[1], 10); // Extract month as integer
            var year = parseInt(parts[0], 10); // Extract year as integer


            console.log(year)
            var date = new Date(year, month - 1, day);


             return days_of_week[date.getDay()] + ' ' + day + ', ' + months[month - 1];

        }
    }
}
</script>



<style scoped>

</style>
