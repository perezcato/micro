<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <h4 class="mb-4">Loan Requests</h4>
                    <table class="table table-striped yajra-datatable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Surname</th>
                            <th>First Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Loan Amount(Ghc)</th>
                            <th>Date requested</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('loans.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'surname', name: 'surname'},
                    {data: 'firstname', name: 'firstname'},
                    {data: 'address', name: 'address'},
                    {data: 'email', name: 'email'},
                    {data: 'telephone', name: 'telephone'},
                    {data: 'amount', name: 'amount'},
                    {data: 'requested', name: 'requested'},
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>

</x-app-layout>
