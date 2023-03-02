<div class="p-2">

    @php
    $disabled = $errors->any() || empty($this->tag->name);
    @endphp

    <div class="flex gap-4">

        <x-jet-button class="bg-yellow-400 hover:bg-yellow-500" wire:click="openModalToUpdateCourseGroup" wire:loading.attr="disabled" title="{{ __('Rename') }}">
            <i class="fas fa-edit"></i>
        </x-jet-button>

    </div>

    <x-jet-dialog-modal wire:model="openModal">

        {{-- Title --}}
        <x-slot name="title">
            {{ __("Update Course Group's Name") }}
        </x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">

            {{-- Form --}}
            <form wire:submit.prevent='update' class="space-y-4" id="UpdateForm-{{ $this->formId }}">

                {{-- Name --}}
                <div class="space-y-4">
                    <x-jet-label for="course_group.name" value="{{ __('Name') }}" />
                    <x-jet-input wire:model.debounce.500ms="course_group.name" class="block w-full" name=" name" id="name" type="text" />
                    <x-jet-input-error for='course_group.name' />
                </div>
            </form>
            </section>
        </x-slot>

        <x-slot name="footer">
        {{-- Cancel Button --}}
            <x-jet-secondary-button wire:click.prevent="$toggle('openModal')">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            {{-- Submit Button --}}
            <x-buttons.primary wire:target='update' wire:loading.attr='disabled' type="submit" :disabled="$disabled" form="UpdateForm-{{ $this->formId }}">
                {{ __('Update') }}
            </x-buttons.primary>
        </x-slot>

    </x-jet-dialog-modal>
</div>
