<div class="mt-6 grid grid-cols-2 gap-2">
  <div class="border border-stone-700 rounded ">
    <h1 class="border-b border-stone-200 text-stone-400 font-bold px-4 py-2">Login</h1>
    <form class="p-4 space-y-4" method="post">
      <?php if ($validacoes = Flash()->get('validacoes_login')): ?>
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
        <label class="text-stone-400 mb-1">Email</label>
        <input type="email" name="email"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
      </div>

      <div class="flex flex-col ">
        <label class="text-stone-400 mb-1">Senha</label>
        <input type="password" name="senha"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
      </div>

      <button type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
        Logar
      </button>
    </form>
  </div>


  <!-- Parte de Registrar -->

  <div class="border border-stone-700 rounded ">

    <div class="border border-stone-700 rounded ">
      <h1 class="border-b border-stone-200 text-stone-400 font-bold px-4 py-2">Criar uma Conta</h1>
      <form class="p-4 space-y-4" method="POST" action="/registrar">

        <?php if ($validacoes = Flash()->get('validacoes_registrar')): ?>
          <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sn font-bold">
            <ul>
              <li>Erros de Validações!</li>
              <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>

              <?php endforeach; ?>

            </ul>
          </div>

        <?php endif; ?>


        <div class="flex flex-col ">
          <label class="text-stone-400 mb-1">nome</label>
          <input type="text" name="nome"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <div class="flex flex-col ">
          <label class="text-stone-400 mb-1">Email</label>
          <input type="text" name="email"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Confirme o seu Email</label>
          <input type="text" name="email_confirmacao"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <div class="flex flex-col ">
          <label class="text-stone-400 mb-1">Senha</label>
          <input type="password" name="senha"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <button type="submit"
          class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
          Registrar
        </button>

        <button type="reset"
          class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
          Cancelar
        </button>

      </form>
    </div>
  </div>
</div>