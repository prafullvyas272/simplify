<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref, onMounted } from 'vue';
import { useToast } from "primevue/usetoast";
const toast = useToast();



const confirmingUserDeletion = ref(false);
const confirmingCancelSubscription = ref(false);
let disableCancelSubscriptionButton = ref(true);
let currentSubscription = ref(null);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    nextTick(() => passwordInput.value.focus());
};

const confirmCancelSubscription = () => {
    confirmingCancelSubscription.value = true;

    // nextTick(() => passwordInput.value.focus());
};

const getSimplifySubscription = () => {
    axios.get(route("simplify.get-simplify-subscription")).then((response) => {
        currentSubscription.value = response.data.subscription;
        disableCancelSubscriptionButton.value = currentSubscription.value.stripe_status == 1 ? false : true;
    });
};

onMounted(() => {
    getSimplifySubscription();
});

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const cancelSubscription = () => {
    console.log('cancelSubscription');

    axios.post(route("simplify.cancel-subscription"),{
            }).then((response) => {

                console.log(response.data);
                if (response.data.status=== 200){
                    console.log('success');
                    closeModal();
                    toast.add({ severity: 'success', summary: response.data.message, life: 3000 });
                    disableCancelSubscriptionButton = true;

                }
            }).then(()=>{
                console.log('finally');

            })
};

const closeModal = () => {
    confirmingUserDeletion.value = false;
    confirmingCancelSubscription.value = false;
    form.reset();
};
</script>

<template>

    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-black">Delete Account</h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
                your account, please download any data or information that you wish to retain.
            </p>
        </header>

        <DangerButton @click="confirmUserDeletion">Delete Account</DangerButton>


        <Modal :show="confirmingUserDeletion" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Are you sure you want to delete your account?
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please
                    enter your password to confirm you would like to permanently delete your account.
                </p>

                <div class="mt-6">
                    <InputLabel for="password" value="Password" class="sr-only" />

                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="Password"
                        @keyup.enter="deleteUser"
                    />

                    <InputError :message="form.errors.password" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>

                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                        Delete Account
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
    <section v-if="currentSubscription" class="mt-5 space-y-6">
        <header>
            <h2 class="text-lg font-medium text-black">Cancel Subscription</h2>

            <p v-if="currentSubscription?.pakage_id == 3" class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                If you cancel your subscription, you will not be charged from the next month. You can still use the simplify until the end of the current period.
            </p>
            <p v-if="currentSubscription?.pakage_id == 4 || currentSubscription?.pakage_id == 5" class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                If you cancel your subscription you will not be charged on your renewal date. All services will continue to work until the final day of your subscription. Should you wish to restart your subscription in the future, you will need to set up your account again as we do not retain any information about you post cancellation.
            </p>
        </header>
        <DangerButton @click="confirmCancelSubscription" :disabled="disableCancelSubscriptionButton" :class="{ 'opacity-25': disableCancelSubscriptionButton }">Cancel Subscription</DangerButton>

        <Modal :show="confirmingCancelSubscription" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Are you sure you want to cancel your subscription?
                </h2>

                <p v-if="currentSubscription.pakage_id == 3" class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    If you cancel your subscription, you will not be charged from the next month. You can still use the simplify until the end of the current period.
                </p>
                <p v-if="currentSubscription.pakage_id == 4 || currentSubscription.pakage_id == 5" class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    If you cancel your subscription you will not be charged on your renewal date. All services will continue to work until the final day of your subscription. Should you wish to restart your subscription in the future, you will need to set up your account again as we do not retain any information about you post cancellation.
                </p>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>

                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="cancelSubscription"
                    >
                        Cancel Subscription
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
<style>
.disable-btn{
    background-color: #ccc;
    color: #fff;
    cursor: not-allowed;
}
</style>
