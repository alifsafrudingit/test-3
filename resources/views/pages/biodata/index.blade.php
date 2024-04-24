<x-app-layout>
  <x-slot name="title">Admin</x-slot>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Biodata') }}
      </h2>
  </x-slot> 

  <x-slot name="script">
      <script>
          var datatable = $('#dataTable').DataTable({
              processing: true,
              serverSide: true,
              stateSave: true,
              ajax: {
                  url: '{!! url()->current() !!}',
              },
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
              },
              columns: [
                  {
                      data: 'id',
                      name: 'id',
                  },
                  {
                      data: 'nama',
                      name: 'nama',
                  },
                  {
                      data: 'jenis_kelamin',
                      name: 'jenis_kelamin',
                  },
                  {
                      data: 'tanggal_lahir',
                      name: 'tanggal_lahir',
                  },
                  {
                      data: 'alamat',
                      name: 'alamat',
                  },
                  {
                      data: 'no_telp',
                      name: 'no_telp',
                  },
                  {
                      data: 'email',
                      name: 'email',
                  },
                  {
                      data: 'action',
                      name: 'action',
                      orderable: false,
                      searchable: false,
                      width: '15%'
                  },
              ],
            });
      </script>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="mb-10">
              <a href="{{ route('biodata.create') }}" 
              class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
              + Buat Biodata
              </a>
          </div>
          <div class="overflow-hidden shadow sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <table id="dataTable" style="text-align: center">
                      <thead>
                          <tr>
                              <th style="max-width: 1%">ID</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Tanggal Lahir</th>
                              <th>Alamat</th>
                              <th>No Telephone</th>
                              <th>Email</th>
                              <th style="max-width: 1%">Aksi</th>
                          </tr>
                      </thead>
                      <tbody></tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
{{-- ? --}}