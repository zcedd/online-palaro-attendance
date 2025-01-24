@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="modal-content">
        <div class="modal-header p-3 rounded-top bg-danger text-white shadow">
            <p class="mb-0 text-center mx-auto" id="ModalLabel">{{ $title }}</p>
        </div>
        <div class="modal-body text-danger text-center  py-5">
            <i class="fa-solid fa-trash display-3 mb-3"></i>
            <p>Proceed with caution. This action cannot be rolled back.</p>
            {{ $content ?? '' }}
        </div>
        <div class="modal-footer bg-light border-0">
            {{ $footer }}
        </div>
    </div>
</x-modal>