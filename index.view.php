    <form class="w-full flex space-x-2 mt-6">
      <input
        type="text" name="pesquisar"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        placeholder="Pesquisar..."
        name="Pesquisar..." />

      <button type="submit">Pesquisar</button>
    </form>

    <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">

      <?php foreach ($livros as $livro) : ?>
        <main class="mx-auto max-w-screen-lg space-y-6">

          <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
              <div class="w-1/3">img</div>

              <div class="space-y-1">
                <a href="/livro?id=<?= $livro->usuario_id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
                <div class="text-xs italic"><?= $livro->autor ?></div>
                <div class="text-xs italic">⭐⭐⭐⭐⭐(24 Avaliações)</div>
              </div>
            </div>
            <div class="text-sm mt-2">
              <?=$livro->descricao?>
            </div>
          </div>

        </main>

      <?php endforeach; ?>

    </section>