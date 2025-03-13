import { store, getContext } from "@wordpress/interactivity";

/**
 * Block01Manager Class
 */
class Block01Manager {
  /**
   * Constructor for the Block01Manager class.
   *
   * Initializes the state and sets up the interactivity store.
   */
  constructor() {
    this.isDark = false;
    this.darkText = "Dark Theme";
    this.lightText = "Light Theme";
    this.stateText = "Initial State";

    this.setupStore();
  }

  /**
   * Sets up the interactivity store with state, actions, and callbacks.
   */
  setupStore() {
    store("block01", {
      state: {
        isDark: this.isDark,
        darkText: this.darkText,
        lightText: this.lightText,
        stateText: this.stateText,
        get themeText() {
          return this.isDark ? this.darkText : this.lightText;
        },
      },
      actions: {
        toggleOpen: this.toggleOpen.bind(this),
        toggleTheme: this.toggleTheme.bind(this),
        toggleStateText: this.toggleStateText.bind(this),
      },
      callbacks: {
        logIsOpen: this.logIsOpen.bind(this),
      },
    });
  }

  /**
   * Toggles the open state.
   */
  toggleOpen() {
    const context = getContext();
    context.isOpen = !context.isOpen;
  }

  /**
   * Toggles the theme between dark and light.
   */
  toggleTheme() {
    this.isDark = !this.isDark;
  }

  /**
   * Toggles the state text.
   */
  toggleStateText() {
    this.stateText =
      this.stateText === "Changed!" ? "Changed again!!!" : "Changed!";
  }

  /**
   * Logs whether the form is open (for debugging purposes).
   */
  logIsOpen() {
    const { isOpen } = getContext();
    console.log(`Is open: ${isOpen}`);
  }
}

// Initialize the Block01Manager
document.addEventListener("DOMContentLoaded", () => {
  new Block01Manager();
});
