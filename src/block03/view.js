import { store, getContext } from "@wordpress/interactivity";

const { state } = store("block01", {
  state: {
    counter: 0,
  },
  actions: {
    addOne() {
      console.log('addOne...');
      console.log('state', state);
      console.log('state03', state03);
      state.counter++;
      state03.counter--;
    },
  },
});


const { state03 } = store("block03", {
  state03: {
    counter: 1000000,
  },
  actions: {
    subtractOne() {
      console.log('subtractOne...');
      console.log('state03', state03);
      state03.counter--;
    },
  },
});

console.log('state', state);
console.log('state03', state03);
