import{a as e}from"./links.125d59c9.js";const s={methods:{maybeUpdateId(n){const t=e(),o=this.metaHtml(t.options.webmasterTools[n]);o instanceof HTMLElement&&o.nodeName==="META"&&o.getAttribute("content").length&&(t.options.webmasterTools[n]=o.getAttribute("content"))},metaHtml(n){const t=document.createElement("div");return t.innerHTML=n,t.firstChild}}};export{s as M};
