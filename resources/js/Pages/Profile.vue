<script setup>
import { storeToRefs } from "pinia";
import ProfileLayout from "./../Layouts/ProfileLayout.vue";
import { useUserStore } from "./../Stores/user.js";
import { useProfilestore } from "../Stores/profile";
import { watch } from "vue";
import Content from "../Components/UI/Profile/Content.vue";
import MyData from "./../Components/UI/Profile/Sections/MyData/MyData.vue";
const props = defineProps({
  userInfo: {
    type: Object,
    required: true,
  },
});

const userStore = useUserStore();
const profileStore = useProfilestore();
const { activeTab } = storeToRefs(profileStore);
userStore.setUserInfo(props.userInfo);
</script>

<template>
  <ProfileLayout>
    <template v-slot:content>
      <Content v-if="activeTab === 'my-data'">
        <MyData></MyData>
      </Content>
      <Content v-if="activeTab === 'my-rentals'"> 111 </Content>
    </template>
  </ProfileLayout>
</template>

<style scoped>
</style>
