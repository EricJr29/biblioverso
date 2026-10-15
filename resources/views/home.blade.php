<x-layout>
    <div
  role="progressbar"
  aria-valuenow="75"
  aria-valuemin="0"
  aria-valuemax="100"
  aria-labelledby="UpdatingLabel"
>
  <div class="flex justify-between gap-4 text-black dark:text-white">
    <span id="UpdatingLabel" class="text-sm font-semibold">Updating</span>

    <span class="text-sm font-semibold">75%</span>
  </div>

  <div
    class="mt-2 w-full border-2 border-black bg-white p-1 shadow-[2px_2px_0_0] shadow-black dark:border-white dark:bg-gray-900 dark:shadow-white"
  >
    <div class="h-3 bg-green-600 dark:bg-green-300" style="width: 75%"></div>
  </div>
</div>

</x-layout>