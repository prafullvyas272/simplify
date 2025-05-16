<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import UpdateAccessTokenForm from './Partials/UpdateAccessTokenForm.vue';
import { TabsList, Tabs, TabsTrigger, TabsContent } from "@/shadcn/ui/tabs"

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    authUser: {
        type: Object,
    }
});
</script>

<template>

    <MainLayout>
        <div class=" bg-[url('/images/signup_bg.jpg')] py-10  bg-cover
    bg-no-repeat">
            <Tabs default-value="profile" class="w-full flex  flex-wrap mt-2">
                <div class="max-w-7xl bg-white rounded-xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <TabsList class="flex flex-row justify-start gap-x-2 text-xs bg-white">
                        <TabsTrigger value="profile"
                            class="rounded px-3 py-1  text-sky-500 data-[state=active]:bg-sky-500 data-[state=active]:text-white">
                            Profile
                        </TabsTrigger>

                        <TabsTrigger value="integrations"
                            class="rounded px-3 py-1  text-sky-500 data-[state=active]:bg-sky-500 data-[state=active]:text-white">
                            Integrations
                        </TabsTrigger>

                    </TabsList>
                </div>

                <TabsContent value="profile" class="w-full">
                    <div class="max-w-7xl bg-white rounded-xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-transparent">
                            <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status"
                                class="max-w-xl" />
                        </div>

                        <div class="p-4 sm:p-8 bg-transparent   ">
                            <UpdatePasswordForm class="max-w-xl" />
                        </div>

                        <div class="p-4 sm:p-8 bg-transparent  ">
                            <DeleteUserForm class="max-w-xl" />
                        </div>
                    </div>
                </TabsContent>
                <TabsContent value="integrations" class="w-full ">
                    <div class="max-w-7xl bg-white rounded-xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-transparent   ">
                            <UpdateAccessTokenForm class="max-w-xl" :authUser="authUser" />
                        </div>
                    </div>

                </TabsContent>


            </Tabs>

        </div>
    </MainLayout>
</template>
