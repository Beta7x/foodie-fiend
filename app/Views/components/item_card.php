<div id="menuCard" class="container mx-auto py-6 z-0">
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach($menus as $menu): ?>
    <div class="relative mb-2 flex w-full max-w-xs flex-col overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-md">
      <a href="<?= base_url('menus/' . $menu->id) ?>" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
        <img class="object-cover" src="<?= $menu->image_url ?>" alt="product image" />
      </a>
      <div class="mt-4 px-5 pb-5">
        <a href="<?= base_url('menus/' . $menu->id) ?>">
          <h5 class="text-lg font-semibold tracking-tight text-slate-900"><?= $menu->name ?? "menu pertama" ?></h5>
        </a>
        <div class="mt-2 mb-1 flex items-center justify-between">
          <p>
            <span class="text-md font-bold text-slate-900">Rp. <?php echo "" . number_format($menu->price + 0, 0, ',', '.') ?></span>
          </p>
        </div>
        <div class="flex justify-end items-center mb-4">
          <?php for($i = 1; $i <= 4; $i++): ?>
            <?php if($i <= $menu->rating): ?>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            <?php else: ?>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-200 opacity-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
            <?php endif ?>
          <?php endfor ?>
          <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold"><?= $menu->rating ?></span>
        </div>
        <form action="<?= base_url('chart/add/' . $menu->id) ?>" method="post">
          <button type="submit" id="add-to-shoping-chart-btn" class="w-full mx-auto flex items-center justify-center rounded-md bg-yellow-500 px-5 py-2.5 text-center text-sm font-medium text-white transition-all duration-150 ease-in-out hover:bg-yellow-700 focus:outline-none focus:ring-4 focus:ring-yellow-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Tambah ke keranjang
          </button>
        </form>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>