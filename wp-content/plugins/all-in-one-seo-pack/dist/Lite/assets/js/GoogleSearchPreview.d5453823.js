import{u as s,t as a}from"./links.bbde6535.js";import{o as i,c,a as e,m as _,A as u,t as o}from"./vue.runtime.esm-bundler.308f2021.js";import{_ as l}from"./_plugin-vue_export-helper.5bcc150c.js";const d={setup(){return{rootStore:s()}},props:{title:{type:String,required:!0},description:{type:String,required:!0},domain:{type:String,default(){return s().aioseo.urls.mainSiteUrl}},separator:String},methods:{truncate:a}},p={class:"aioseo-google-search-preview"},m={class:"google-post"},g={class:"domain"},f={class:"site-title"},y={class:"meta-description"};function v(r,S,t,h,x,n){return i(),c("div",p,[e("div",m,[e("div",g,[_(r.$slots,"domain",{},()=>[u(o(t.domain),1)],!0)]),e("div",f,o(n.truncate(t.title,100)),1),e("div",y,o(n.truncate(t.description)),1)])])}const B=l(d,[["render",v],["__scopeId","data-v-7978e031"]]);export{B as C};
