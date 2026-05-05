<?= $livro->titulo ?>

<div class=" p-2 rounded border-stone-800 border-2 bg-stone-900 ">
  <div class="flex">
    <div class="w-1/3">img</div>

    <div class="space-y-1">
      <a href="/livro?id=<?= $livro->id ?>"
        class="font-semibold hover:underline text-yellow-200"><?= $livro->titulo ?></a>
      <div class="text-xs italic"><?= $livro->autor ?></div>
      <div class="text-xs italic">⭐⭐⭐⭐⭐(24 Avaliações)</div>
    </div>
  </div>
  <div class="text-sm mt-2">
    <?= $livro->descricao ?>
  </div>
</div>

<h2>Avaliações</h2>
<div class="grid grid-cols-4 gap-4">
  <div class="col-span-3">lista</div>
  <div>
    <?php if(auth()): ?>
    <div class="border border-stone-700 rounded ">
      <h1 class="border-b border-stone-200 text-stone-400 font-bold px-4 py-2">Me conte o que achou </h1>
      <form class="p-4 space-y-4" method="post" action="/avaliacao-criar">
        <?php if ($validacoes = Flash()->get('validacoes')): ?>
          <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sn font-bold">
            <ul>
              <li>Erro de Validação!</li>
              <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>

              <?php endforeach; ?>

            </ul>
          </div>

        <?php endif; ?>

        
        <div class="flex flex-col">
          <input type="hidden" name="livro_id" value="<?=$livro->id?>" /> 
          <label class="text-stone-400 mb-1">Avaliação</label>
          <textarea type="text" name="avaliacao"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"></textarea>
        </div>

        <div class="flex flex-col ">
          <label class="text-stone-400 mb-1">Nota</label>
          <select name="nota"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>

        <button type="submit"
          class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
          Salvar
        </button>
      </form>
    </div>
    <?php endif; ?>
  </div>
</div>