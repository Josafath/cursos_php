<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-center">
        <div class="flex gap-4">
            <a href="/public/"      class="<?= $_SERVER['REQUEST_URI'] === '/public/'      ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
            <a href="/public/post"  class="<?= $_SERVER['REQUEST_URI'] === '/public/post'  ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?>   rounded-md px-3 py-2 text-sm font-medium">Post</a>
            <a href="/public/about" class="<?= $_SERVER['REQUEST_URI'] === '/public/about' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Acerca de</a>
            <a href="/public/links" class="<?= $_SERVER['REQUEST_URI'] === '/public/links' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Proyectos</a>
        </div>
    </div>
</nav>
