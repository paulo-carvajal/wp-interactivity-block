import { store, getContext } from "@wordpress/interactivity";

const { state } = store("block01", {
  state: {
    get themeText() {
      return state.isDark ? state.darkText : state.lightText;
    },
  },
  actions: {
    toggleOpen() {
      const context = getContext();
      context.isOpen = !context.isOpen;
    },
    toggleTheme() {
      state.isDark = !state.isDark;
    },
    toggleStateText() {
      state.stateText =
        state.stateText === "Changed!" ? "Changed again!!!" : "Changed!";
    },
  },
  callbacks: {
    logIsOpen: () => {
      const { isOpen } = getContext();
      // Log the value of `isOpen` each time it changes.
      console.log(`Is open: ${isOpen}`);
    },
  },
});
