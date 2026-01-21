<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-center">
        <div class="flex gap-4">
            <a href="/Curso2_Avanzado/index.php" class="<?= $_SERVER['REQUEST_URI'] === '/Curso2_Avanzado/index.php' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
            <a href="/Curso2_Avanzado/post.php"  class="<?= $_SERVER['REQUEST_URI'] === '/Curso2_Avanzado/post.php' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?>   rounded-md px-3 py-2 text-sm font-medium">Post</a>
            <a href="/Curso2_Avanzado/about.php" class="<?= $_SERVER['REQUEST_URI'] === '/Curso2_Avanzado/about.php' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Acerca de</a>
            <a href="/Curso2_Avanzado/links.php" class="<?= $_SERVER['REQUEST_URI'] === '/Curso2_Avanzado/links.php' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-600 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Proyectos</a>
        </div>
    </div>
</nav>

<pre>
    <?php
        var_dump($_SERVER['REQUEST_URI']);
        die();
    ?>
</pre>