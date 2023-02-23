<div class="overflow-hidden border border-gray-200 shadow sm:rounded-lg">

    <div class="flex w-full p-3 space-x-2">
        {{-- Search Box --}}
        <div class="w-3/6">
            <input wire:model.debounce.300ms="search" type="text" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50" placeholder="Search course-groups....">
        </div>

        {{-- Order by --}}
        <div class="relative w-1/6">
            <select wire:model="orderBy" id="orderBy" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50 ">
                <option value="name">{{ __('Name')}}</option>
                <option value="created-at">{{ __('Created At')}}</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>

        {{-- Order Asc --}}
        <div class="relative w-1/6">
            <select wire:model="orderAsc" id="orderAsc" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50 ">
                <option value="1">{{ __('Ascending')}}</option>
                <option value="0">{{ __('Descending')}}</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>

        {{-- Per Page --}}
        <div class="relative w-1/6">
            <select wire:model="perPage" id="perPage" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            </div>
        </div>
    </div>

    <div class="overflow-hidden shadow">
        <table class="w-full divide-y divide-gray-200 table-fixed">
            <thead class="font-bold tracking-wide text-gray-500 bg-indigo-100">
                <tr class="text-xs tracking-wider text-center uppercase">
                    <th class="w-1/12 p-2">
                        Id
                    </th>
                    <th class="w-1/3 p-2">
                        Name
                    </th>

                    <th class="w-1/6 p-2">
                        Created Date
                    </th>

                    <th class="w-1/6 p-2">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody class="text-xs divide-y divide-gray-200 bg-gray-50">
                @foreach ($course_groups as $course_group)
                <tr class="whitespace-nowrap">
                    <td class="p-2">{{ $course_group->id() }}</td>
                    <td class="p-2">{{ $course_group->name() }}</td>
                    <td class="p-2">{{ $course_group->createdAt() }}</td>

                    <td class="flex space-x-4">
                        {{-- Edit Button --}}
                        {{--<livewire:course-groups.edit :course_group="$course_group" :wire:key="'edit-course-group'. now() . $course_group->id()" />--}}

                        {{-- Delete Button --}}
                        <livewire:course-groups.delete :course_group="$course_group" :wire:key="'delete-course-group'. $course_group->id()">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
    // Browser Event
    const sweetAlertFire = function(e) {
        Swal.fire({
            title: e.detail.title
            , icon: e.detail.icon
            , iconColor: e.detail.iconColor
            , timer: 3000
            , toast: true
            , position: 'top-right'
            , timerProgressBar: true
            , showConfirmButton: false
        , });
    }

    window.addEventListener('updated', sweetAlertFire, false);
    window.addEventListener('Course_groupDeleted', sweetAlertFire, false);

</script>
@endpush
