@props(['color'=>' '])
<table class="table {{$color}}">
    <thead>
      <tr>
        {{$columnas}}
      </tr>
    </thead>
    <tbody>
        {{$filas}}
    </tbody>
</table>
