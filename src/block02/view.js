import { store, getContext } from "@wordpress/interactivity";

const { state } = store("block02", {
  state: {
    get themeText() {
      return state.isDark ? state.darkText : state.lightText;
    },
  },
  actions: {
    toggleClass() {
      state.customClass = !state.customClass;
    },
  },
});

const { state01 } = store("block01", {
  actions: {
    toggleOpen() {
      console.log("Togle Open");
      const context = getContext();
      context.isOpen = !context.isOpen;
    },
  },
});
