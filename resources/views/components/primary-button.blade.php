<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2   rounded-md font-semibold text-xs text-white uppercase tracking-widest    transition ease-in-out duration-150 shadow-lg']) }}>
    {{ $slot }}
</button>
