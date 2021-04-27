<!-- component -->
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
.slide-top {
	-webkit-animation: slide-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@-webkit-keyframes slide-top {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
  }
}
@keyframes slide-top {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
  }
}



.slide-right {
	-webkit-animation: slide-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

.post_button {
    position: fixed;
    bottom: 20px;
    right: 20px;
}
button{
    height: 50px;
    width: 50px;
    color: white;
    font-size: 30px;
}
.modal {
    height: 30%;
    width: 80%;
    position: absolute;
    top: 20%;
    left: 10%;
    transform: translate(-50%, -50%);
}
.modal-2{
    display: none;
    position: absolute;
    top: 14%;
}
.hash{
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: 99999;
    display: none;
}
.cancel{
    font-size: 30px;
    position: absolute;
    top: 1%;
    color: white;
    z-index: 9999999;
    left: 95%;
    cursor: pointer;
}
@-webkit-keyframes slide-right {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(100px);
            transform: translateX(100px);
  }
}
@keyframes slide-right {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(100px);
            transform: translateX(100px);
  }
}

</style>
{{ data }}
<article class="border w-2/4 mx-auto border-gray-400 rounded-lg md:p-4 bg-white sm:py-3 py-4 px-2 m-10" data-article-path="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" data-content-user-id="112962">
  <div role="presentation">
      <div>
        <div class="m-2">
          <div class="flex items-center">
              <div class="mr-2">                
                <a href="/hagnerd">          
                  <img class="rounded-full w-8" src="https://res.cloudinary.com/practicaldev/image/fetch/s---dcV6iX4--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/112962/b1373942-b945-4d16-af76-c448e080d14a.jpeg" alt="hagnerd profile" loading="lazy">        
                </a>      
              </div>
              <div>
                <p>          
                  <a href="/hagnerd" class="text text-gray-700 text-sm hover:text-black">Matt Hagner {{ session }}</a>                  
                </p>
                <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" class="text-xs text-gray-600 hover:text-black">          
                  <time datetime="2019-08-02T13:58:42.196Z">Aug  2 '19 </time>        
                </a>      
              </div>
          </div>
        </div>
        <div class="pl-12 md:pl-10 xs:pl-10">
          <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
            <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" id="article-link-151230">
              Setting up Tailwind With create-react-app
            </a>
          </h2>
          <div class="mb-2">
              <a href="/t/react" class="text-sm text-gray-600 p-1 hover:text-black">
                <span class="text-opacity-50">#</span>
                react
              </a>
              <a href="/t/javascript" class="text-sm text-gray-600 p-1 hover:text-black">
                <span class="text-opacity-50">#</span>
                javascript
              </a>
              <a href="/t/tailwind" class="text-sm text-gray-600 p-1 hover:text-black">
                <span class="text-opacity-50">#</span>
                tailwind
              </a>
          </div>
          <div class="mb-1 leading-6">…base;
              @<mark>tailwind</mark> components;
              @<mark>tailwind</mark> utilities;
              These are <mark>Tailwind</mark> directives...What is <mark>Tailwind</mark>?…
          </div>
          <div class="flex justify-between items-center">
              <div class="flex">
                <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                    <svg class="inline fill-current" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.884 12.595l.01.011L12 19.5l-6.894-6.894.01-.01A4.875 4.875 0 0112 5.73a4.875 4.875 0 016.884 6.865zM6.431 7.037a3.375 3.375 0 000 4.773L12 17.38l5.569-5.569a3.375 3.375 0 10-4.773-4.773L9.613 10.22l-1.06-1.062 2.371-2.372a3.375 3.375 0 00-4.492.25v.001z"></path>
                    </svg>
                    195<span class="hidden md:inline">&nbsp;reactions</span>
                </a>
                <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd#comments" class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                    <svg class="inline fill-current" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z"></path>
                    </svg>
                    20<span class="hidden md:inline">&nbsp;comments</span>
                </a>
              </div>
              <div class="flex items-center">                
                <small class="mr-2 text-gray-600">8 min read</small>                
                <button type="button" class="bg-gray-400 rounded text-sm px-3 py-2 text-current hover:text-black hover:bg-gray-500">                      
                  <span>Save</span>                      
                </button>              
              </div>
          </div>
        </div>
    </div>
  </div>
</article>
<br>
<div class="hash" id="modal">
        <h1 class="cancel" onclick="exitModal()">&times;</h1>
    <div class="modal slide-top" id="first">
        <div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-center px-5 py-5 rounded">
            <div class="w-full mx-auto rounded-lg border border-gray-700 p-8 lg:py-12 lg:px-14 text-gray-300" style="max-width: 800px" >
                <div class="mb-10">
                    <h1 class="text-2xl font-bold"><i class="mdi mdi-star text-yellow-300 text-3xl leading-none align-bottom"></i> Hey, what's popping !</h1>
                   
                </div>
                <div class="mb-10">
                        <ul class="-mx-1">
                                <li class="px-2 py-2 rounded transition-all flex text-md" :class="{'bg-indigo-800':item.focused,'bg-gray-700 shadow-lg px-4 py-4 my-10 -mx-2':item.open,'mb-1 cursor-pointer':!item.open}">
                                    <div class="flex-grow max-w-full">
                                        <div class="w-full" >
                                            <textarea class="text-md w-full bg-transparent text-gray-300 leading-tight focus:outline-none" rows="10" placeholder="What's happening ?"></textarea>
                                        </div>
                                        <div class="w-full flex justify-end" >
                                            <button class="p-1 -mr-1 focus:outline-none hover:text-red-300"><i class="mdi mdi-trash-can-outline"></i></button>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                </div>
                <div class="flex justify-center">
                    <button class="py-1 px-10 border border-gray-800 rounded leading-none focus:outline-none text-xl" onclick="nextPage()"><i class="mdi mdi-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-2 slide-top" id="second">
    <div class="h-screen w-screen sm:px-8 md:px-16 sm:py-8 items-center justify-center">
        <main class="container mx-auto max-w-screen-lg h-full">
            <!-- file upload modal -->
            <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">

            <!-- scroll area -->
            <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                    <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                </p>
                <input id="hidden-input" type="file" multiple class="hidden" />
                <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300  text-sm focus:shadow-outline focus:outline-none w-28">
                    Upload a file
                </button>
                </header>

                <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                To Upload
                </h1>

                <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                    <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                    <span class="text-small text-gray-500">No files selected</span>
                </li>
                </ul>
            </section>

            <!-- sticky footer -->
            <footer class="flex justify-end px-8 pb-8 pt-4">
                <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white text-sm focus:shadow-outline focus:outline-none rounded">
                Post
                </button>
            </footer>
            </article>
        </main>
    </div>

    <!-- using two similar templates for simplicity in js code -->
    <template id="file-template">
      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
          <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
            <h1 class="flex-1 group-hover:text-blue-800"></h1>
            <div class="flex">
              <span class="p-1 text-blue-800">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                  </svg>
                </i>
              </span>
              <p class="p-1 size text-xs text-gray-700"></p>
              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                </svg>
              </button>
            </div>
          </section>
        </article>
      </li>
    </template>

    <template id="image-template">
      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
        <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
          <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
            <h1 class="flex-1"></h1>
            <div class="flex">
              <span class="p-1">
                <i>
                  <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                  </svg>
                </i>
              </span>

              <p class="p-1 size text-xs"></p>
              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                </svg>
              </button>
            </div>
          </section>
        </article>
      </li>
    </template>
    </div>
</div>
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Post something" style="cursor:pointer;" onclick="openModal()" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://www.flaticon.com/svg/vstatic/svg/1828/1828753.svg?token=exp=1619461006~hmac=93bdc3b52470f104603040ea7e7c4ee9"/>
        </a>
    </div>
</div>
<div class="post_button">
    <button class="bg-blue-500 rounded-full"><span style="margin-top: -20px;">+</span></button>
</div>
<script>
function openModal(){
    document.getElementById('modal').style.display = 'block';
}

function exitModal(){
    document.getElementById('modal').style.display = 'none';
}

function nextPage(){
    document.getElementById('first').style.display = 'none';
    document.getElementById('second').style.display = 'block';
}
const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    addFile(gallery, file);
  }
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (target.classList.contains("delete")) {
    const ou = target.dataset.target;
    document.getElementById(ou).remove(ou);
    gallery.children.length === 1 && empty.classList.remove("hidden");
    delete FILES[ou];
  }
};

// print all selected files
document.getElementById("submit").onclick = () => {
  alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
  console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  FILES = {};
  empty.classList.remove("hidden");
  gallery.append(empty);
};

</script>
