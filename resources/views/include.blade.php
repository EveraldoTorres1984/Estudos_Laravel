<h1>Include Hello World</h1>

{{-- @includeif('components/component1', ['html' => '<h1> Componente 1 </h1>']) --}}

{{-- @includewhen(true,'components/component1', ['html' => '<h1> Componente 1 </h1>']) --}}

@includeFirst(['components.component2', 'components.component1'], ['html' => '<h1> Componente 1 </h1>'])
