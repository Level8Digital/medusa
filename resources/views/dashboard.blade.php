<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="flex justify-center">
    <div class="w-4/5 mt-4">

      @if(session('success') ?? '')
        <div class="bg-green-100 border-l-4 border-green-500 text-green-600 p-4 mb-4" role="alert">
          <p class="font-bold">Success</p>
          <p>{{ session('success') ?? '' }}</p>
        </div>
      @endif

      @if(session('error') ?? '')
        <div class="bg-red-100 border-l-4 border-red-500 text-red-600 p-4 mb-4" role="alert">
          <p class="font-bold">Error</p>
          <p>{{ session('error') ?? '' }}</p>
        </div>
      @endif
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-4">
            <a href="{{ url('/notify-update') }}" class="text-indigo-600">
                <svg class="h-5 w-5 text-indigo-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
                Notify Of Update
            </a>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <div class="flex justify-center mx-auto">
              <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                  <table class="divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Purchase #
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          TradingView Account
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Email
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Total
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Paid
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          PayPal ID
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Paid Date
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Access
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Expirary
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Notified
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                          Tools
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                      @foreach($purchases as $purchase)
                        <tr class="whitespace-nowrap">
                          <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $purchase['id'] }}
                          </td>
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                              {{ $purchase['username'] }}
                            </div>
                          </td>
                          <td class="px-6 py-4">
                            <div class="text-sm text-gray-500 text-center">
                              {{ $purchase['email'] }}
                            </div>
                          </td>
                          <td class="px-6 py-4 text-sm text-gray-500 text-center">
                            ${{ $purchase['total'] }}
                            <!-- Only show if PayPal payment and expected total did not match -->
                            @if($purchase['payment_issue'])
                              ({{ $purchase['paid_total'] }})
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm">
                            @if($purchase['is_paid'])
                              <svg class="h-5 w-5 text-green-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 11 12 14 20 6" />  <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                            @else
                              <svg class="h-5 w-5 text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />  <line x1="9" y1="9" x2="15" y2="15" />  <line x1="15" y1="9" x2="9" y2="15" /></svg>
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm text-gray-500 text-center">
                            @if($purchase['paypal_id'])
                              {{ $purchase['paypal_id'] }}
                            @else
                              ---
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm">
                            @if($purchase['is_paid'])
                              {{ $purchase['paid_at'] }}
                            @else
                              ---
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm">
                            @if($purchase['is_paid'])
                              {{ $purchase['access'] }}
                            @else
                              ---
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm">
                            @if($purchase['is_paid'])
                              {{ $purchase['expires_at'] }}
                            @else
                              ---
                            @endif
                          </td>
                          <td class="px-6 py-4 text-sm text-gray-500">
                              @if($purchase['access_granted'])
                                  <svg class="h-5 w-5 text-green-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />  <polyline points="22 4 12 14.01 9 11.01" /></svg>
                              @else
                                  <svg class="h-5 w-5 text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />  <line x1="15" y1="9" x2="9" y2="15" />  <line x1="9" y1="9" x2="15" y2="15" /></svg>
                              @endif
                          </td>
                          <td class="px-6 py-4 text-sm text-center">
                              @if($purchase['is_paid'] && ! $purchase['access_granted'])
                                  <a href="/notify-access/{{ $purchase['id'] }}">
                                      <svg class="h-5 w-5 text-indigo-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
                                  </a>
                              @else
                                  ---
                              @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</x-app-layout>
