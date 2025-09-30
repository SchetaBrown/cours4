import { defineStore } from "pinia"
import { ref } from "vue"

export const useUserStore = defineStore('user', () => {
    const isAuth = ref(false);
    const userInfo = ref(null);

    function setUserAuthStatus(status) {
        isAuth.value = status;
    }

    function setUserInfo(userInfo) {
        userInfo.value = userInfo;
    }

    return {
        isAuth,
        userInfo,
        setUserAuthStatus,
        setUserInfo,
    }
})
