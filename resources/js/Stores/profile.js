import { defineStore } from "pinia";
import { ref } from "vue";
export const useProfilestore = defineStore('profileStore', () => {
    const userInfo = ref([]);
    const activeTab = ref('my-data');

    function setActiveTab(tab) {
        activeTab.value = tab;
    }

    function setUserInfo(data) {
        userInfo.value = data
    }

    return {
        userInfo,
        activeTab,
        setActiveTab,
        setUserInfo
    };
})
