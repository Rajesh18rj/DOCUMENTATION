# Alpine JS
Alpine.js is a lightweight JavaScript framework designed for adding simple interactivity to web pages, especially in applications built with Laravel, Livewire, and Tailwind CSS. It provides reactive and declarative behavior using a minimal syntax, similar to Vue.js but without the need for a full build step.

---
### When to Use Alpine.js ?

When you need simple interactivity like toggling elements, modals, dropdowns.
When using Laravel Livewire, since Alpine.js can handle minor UI interactions without requiring a full frontend framework.
When building a project with Tailwind CSS for rapid styling and development.

---

### Here's a simple example of Alpine.js in action:

```html
<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <p x-show="open">Hello, Alpine.js!</p>
</div>
```
---
<larecipe-progress type="success" :value="100"></larecipe-progress>

## Getting Started with JavaScript

Lets Learn some JavaScript basics before diving into Alpine.js.

## Learn Basic JavaScript Concepts

### Variables: Store Data
```js
let name = "Aaran";
const age = 10;
```

### Data Types: Strings, Numbers, Booleans, Arrays, Objects
```js
let isStudent = true;
let colors = ["red", "blue", "green"];
let user = { name: "John", age: 25 };
```

### Functions: Code That Runs When Called
```js
function greet() {
    return "Hello, world!";
}
```

### Events: Actions Like Clicks, Keypresses, etc.
```js
document.querySelector("button").addEventListener("click", function() {
    alert("Button Clicked!");
});
```

### Practice JavaScript in the Browser Console
Open the browser, right-click → Inspect → Console. Try typing:
```js
console.log("Hello, JavaScript!");
```

### Understand How JavaScript Works with HTML
Example: A button that shows a message when clicked.
```html
<button onclick="alert('Hello!')">Click Me</button>
```
---

### Start Learning Alpine.js with Simple Examples
Once you're comfortable with basic JavaScript, you can try something like this:
```html
<div x-data="{ count: 0 }">
    <button @click="count++">Click me</button>
    <p>You clicked {{ count }} times</p>
</div>
```
---
<larecipe-progress type="success" :value="100"></larecipe-progress>

---

# 1. Installation
---
We can use CDN in Header file or

```bash
npm install alpinejs
```
then add this into app.js

```js
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start();
```
---
<larecipe-progress type="success" :value="100"></larecipe-progress>

---

# 2.  x-data
---

Everything in Alpine starts with the `x-data` directive.

x-data defines a chunk of HTML as an Alpine component and provides the reactive data for that component to reference

Imagine you have a light bulb in your room, and you want to turn it on and off with a button. We can use `x-data` to remember whether the light is on or off.

### Example Code:

```html
<div x-data="{ isOn: false }">
  <button x-on:click="isOn = !isOn">Toggle Light</button>
  <p x-text="isOn ? 'The light is on' : 'The light is off'"></p>
</div>
```
## Explanation:
`x-data="{ isOn: false }"` starts by saying the light is off (isOn: false).
When you click the button, `x-on:click="isOn = !isOn"` flips the state of the light. If it's on, it turns off; if it's off, it turns on.
The paragraph `<p>` changes the text based on whether isOn is true or false: it shows "The light is on" or "The light is off."

### Example 2
```html
<div x-data="{name: 'Steve Rogers'}" class="bg-green-400 p-4 m-4 rounded">
    <span x-text="name"></span>
</div>
```
---
##### Output::
---
![Example 2](/docs/images/example1.png)


We can see the output..

Ithula Namma Enna Pannirukom naa, name ah x-data la key-value pair ah store panni athoda key ya x-text la kuduthu get pannirukom..

### Example 3
Ipo athuku keelaiye innoru vera div la antha key ah use panni value get panna mudiyuma nu try pannuvom..
```html
<div x-data="{name: 'Steve Rogers'}" class="bg-green-400 p-4 m-4 rounded">
    <span x-text="name"></span>
</div>

<!--div2-->
<div class="bg-slate-200 m-4 p-4 rounded">
    <span x-text="name"></span>
</div>
```
---
##### Output::
---
![Example 3](/docs/images/example2.png)
value va get panna mudila becoz.. `x-data` value va antha div kulla mattum than use panna mudiyum key-value pair ah use panni.. antha div ku veliya use panna mudiyathu..

---

### Example 4
```html
<div x-data="{name: 'Steve Rogers'}">
    
    <div class="bg-green-400 p-4 m-4 rounded">
        <span x-text="name"></span>
    </div>

    <div class="bg-slate-200 m-4 p-4 rounded">
        <span x-text="name"></span>
    </div>
    
</div>
```
intha mari oru Main div la pottu athuku , intha rendu div um kuduthaa.. Ipo rendukum name get Aagum..

---
##### Output::
---
![Example 4](/docs/images/example3.png)

# 3 x-bind
