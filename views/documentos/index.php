<?php include './views/layouts/dashboard/header.php'; ?>

  <div class="m-3">
  <nav class="flex mb-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2">
      <li class="inline-flex items-center">
        <a href="#" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
          <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
          <a href="#" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">E-commerce</a>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
          <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium" aria-current="page">Products</span>
        </div>
      </li>
    </ol>
  </nav>
  <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">All products</h1>
  <p><?php echo $_SESSION['role_nombre']  ?></p>
</div>

<!--
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
  <div class="flex items-center justify-between mb-4">
    <div class="flex-shrink-0">
      <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">$45,385</span>
      <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
    </div>
    <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
      12.5%
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </div>
  </div>
  <div id="main-chart"></div>
</div>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">

  <div class="mb-4 flex items-center justify-between">
    <div>
      <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
      <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
    </div>
    <div class="flex-shrink-0">
      <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View all</a>
    </div>
  </div>

  <div class="flex flex-col mt-8">
    <div class="overflow-x-auto rounded-lg">
      <div class="align-middle inline-block min-w-full">
        <div class="shadow overflow-hidden sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Transaction
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date & Time
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Amount
                </th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <tr>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                  Payment from <span class="font-semibold">Bonnie Green</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 23 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $2300
                </td>
              </tr>
              <tr class="bg-gray-50">
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                  Payment refund to <span class="font-semibold">#00910</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 23 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  -$670
                </td>
              </tr>
              <tr>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                  Payment failed from <span class="font-semibold">#087651</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 18 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $234
                </td>
              </tr>
              <tr class="bg-gray-50">
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                  Payment from <span class="font-semibold">Lana Byrd</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 15 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $5000
                </td>
              </tr>
              <tr>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                  Payment from <span class="font-semibold">Jese Leos</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 15 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $2300
                </td>
              </tr>
              <tr class="bg-gray-50">
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                  Payment from <span class="font-semibold">THEMESBERG LLC</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 11 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $560
                </td>
              </tr>
              <tr>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                  Payment from <span class="font-semibold">Lana Lysle</span>
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                  Apr 6 ,2021
                </td>
                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                  $1437
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>-->

<?php include './views/layouts/dashboard/footer.php'; ?>