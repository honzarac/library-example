import{o as l,c as p,a as t,t as v,b,w as _,d as A,u as y,n as B,F as P,r as U,e as R,m as f,f as x,g as k,h as C,i as I,j as $,X as j,k as D,v as E,l as L,O as w}from"./app-294e1cda.js";import{L as O}from"./Layout-0595caab.js";const N={class:"text-gray-400"},V={class:"text-right"},q={__name:"LibraryItemRow",props:{libraryItem:Object},setup(e){return(i,s)=>(l(),p(P,null,[t("div",null,v(e.libraryItem.name),1),t("div",N,v(e.libraryItem.author.full_name),1),t("div",null,v(e.libraryItem.type_label),1),t("div",V,[b(y(B),{href:`/library-item/${e.libraryItem.id}`,class:"rounded bg-gray-100 p-2.5 hover:bg-gray-300"},{default:_(()=>[A("detail")]),_:1},8,["href"])])],64))}},z={emits:["pagination-change-page"],props:{data:{type:Object,default:()=>{}},limit:{type:Number,default:0},keepLength:{type:Boolean,default:!1}},computed:{isApiResource(){return!!this.data.meta},currentPage(){return this.isApiResource?this.data.meta.current_page:this.data.current_page},firstPageUrl(){return this.isApiResource?this.data.links.first:null},from(){return this.isApiResource?this.data.meta.from:this.data.from},lastPage(){return this.isApiResource?this.data.meta.last_page:this.data.last_page},lastPageUrl(){return this.isApiResource?this.data.links.last:null},nextPageUrl(){return this.isApiResource?this.data.links.next:this.data.next_page_url},perPage(){return this.isApiResource?this.data.meta.per_page:this.data.per_page},prevPageUrl(){return this.isApiResource?this.data.links.prev:this.data.prev_page_url},to(){return this.isApiResource?this.data.meta.to:this.data.to},total(){return this.isApiResource?this.data.meta.total:this.data.total},pageRange(){if(this.limit===-1)return 0;if(this.limit===0)return this.lastPage;for(var e=this.currentPage,i=this.keepLength,s=this.lastPage,r=this.limit,d=e-r,c=e+r,o=(r+2)*2,a=(r+2)*2-1,u=[],g=[],h,n=1;n<=s;n++)(n===1||n===s||n>=d&&n<=c||i&&n<o&&e<o-2||i&&n>s-a&&e>s-a+2)&&u.push(n);return u.forEach(function(m){h&&(m-h===2?g.push(h+1):m-h!==1&&g.push("...")),g.push(m),h=m}),g}},methods:{previousPage(){this.selectPage(this.currentPage-1)},nextPage(){this.selectPage(this.currentPage+1)},selectPage(e){e!=="..."&&this.$emit("pagination-change-page",e)}},render(){return this.$slots.default({data:this.data,limit:this.limit,computed:{isApiResource:this.isApiResource,currentPage:this.currentPage,firstPageUrl:this.firstPageUrl,from:this.from,lastPage:this.lastPage,lastPageUrl:this.lastPageUrl,nextPageUrl:this.nextPageUrl,perPage:this.perPage,prevPageUrl:this.prevPageUrl,to:this.to,total:this.total,pageRange:this.pageRange},prevButtonEvents:{click:e=>{e.preventDefault(),this.previousPage()}},nextButtonEvents:{click:e=>{e.preventDefault(),this.nextPage()}},pageButtonEvents:e=>({click:i=>{i.preventDefault(),this.selectPage(e)}})})}},M=(e,i)=>{const s=e.__vccOpts||e;for(const[r,d]of i)s[r]=d;return s},H={compatConfig:{MODE:3},inheritAttrs:!1,emits:["pagination-change-page"],components:{RenderlessPagination:z},props:{data:{type:Object,default:()=>{}},limit:{type:Number,default:0},keepLength:{type:Boolean,default:!1},itemClasses:{type:Array,default:()=>["bg-white","text-gray-500","border-gray-300","hover:bg-gray-50"]},activeClasses:{type:Array,default:()=>["bg-blue-50","border-blue-500","text-blue-600"]}},methods:{onPaginationChangePage(e){this.$emit("pagination-change-page",e)}}},S=["disabled"],T=t("span",{class:"sr-only"},"Previous",-1),X=t("svg",{class:"h-5 w-5","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15.75 19.5L8.25 12l7.5-7.5"})],-1),F=["aria-current"],J=["disabled"],K=t("span",{class:"sr-only"},"Next",-1),Q=t("svg",{class:"w-5 h-5","aria-hidden":"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M8.25 4.5l7.5 7.5-7.5 7.5"})],-1);function W(e,i,s,r,d,c){const o=U("RenderlessPagination");return l(),R(o,{data:s.data,limit:s.limit,"keep-length":s.keepLength,onPaginationChangePage:c.onPaginationChangePage},{default:_(a=>[a.computed.total>a.computed.perPage?(l(),p("nav",f({key:0},e.$attrs,{class:"isolate inline-flex -space-x-px rounded-md shadow-sm","aria-label":"Pagination"}),[t("button",f({class:["relative inline-flex items-center rounded-l-md border px-2 py-2 text-sm font-medium focus:z-20 disabled:opacity-50",s.itemClasses],disabled:!a.computed.prevPageUrl},x(a.prevButtonEvents,!0)),[k(e.$slots,"prev-nav",{},()=>[T,X])],16,S),(l(!0),p(P,null,C(a.computed.pageRange,(u,g)=>(l(),p("button",f({class:["relative inline-flex items-center border px-4 py-2 text-sm font-medium focus:z-20",[u==a.computed.currentPage?s.activeClasses:s.itemClasses,u==a.computed.currentPage?"z-30":""]],"aria-current":a.computed.currentPage?"page":null,key:g},x(a.pageButtonEvents(u),!0)),v(u),17,F))),128)),t("button",f({class:["relative inline-flex items-center rounded-r-md border px-2 py-2 text-sm font-medium focus:z-20 disabled:opacity-50",s.itemClasses],disabled:!a.computed.nextPageUrl},x(a.nextButtonEvents,!0)),[k(e.$slots,"next-nav",{},()=>[K,Q])],16,J)],16)):I("",!0)]),_:3},8,["data","limit","keep-length","onPaginationChangePage"])}const Y=M(H,[["render",W]]);const Z=t("h3",{class:"text-center font-bold"},"Tituly k vypůjčení",-1),G=t("br",null,null,-1),ee={class:"flex my-6 w-full"},te={class:"flex-grow"},ae=t("br",null,null,-1),se={class:"items-grid grid gap-4 w-full"},re={class:"flex justify-center mt-6"},le={__name:"Dashboard",props:{libraryItems:Object,query:String},setup(e){const i=e;function s(c=1){w.get("/",{page:c})}let r=$(i.query);function d(){w.get("/",{query:r.value})}return(c,o)=>(l(),p(P,null,[b(y(j),{title:"Dashboard"}),b(O,null,{default:_(()=>[Z,G,t("div",ee,[t("div",te,[D(t("input",{class:"w-full border border-gray-300 p-4",placeholder:"Hledat v titulech...","onUpdate:modelValue":o[0]||(o[0]=a=>L(r)?r.value=a:r=a)},null,512),[[E,y(r)]])]),t("button",{onClick:d,class:"rounded bg-blue-500 text-white p-2.5 hover:bg-blue-600 float-right mx-2 cursor-pointer"},"Hledat")]),ae,t("div",se,[(l(!0),p(P,null,C(e.libraryItems.data,a=>(l(),R(q,{"library-item":a},null,8,["library-item"]))),256))]),t("div",re,[b(y(Y),{data:e.libraryItems,onPaginationChangePage:s},null,8,["data"])])]),_:1})],64))}};export{le as default};
