import { defineStore } from "pinia";
import { ref } from "vue";

export const useUserStore = defineStore('userStore', () => {
    const userInfo = ref([]);
    const isAuth = ref(false);

    function setUserAuthStatus(status) {
        isAuth.value = status;
    }

    function setUserInfo(data) {
        userInfo.value = data;
    }

    return {
        userInfo,
        isAuth,
        setUserAuthStatus,
        setUserInfo
    }
}, {
    persist: true
})
