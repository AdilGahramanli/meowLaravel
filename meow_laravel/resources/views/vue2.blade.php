<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <table>
  <thead>
    <tr>
      <th>Column 1 Heading</th>
      <th>Column 2 Heading</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
      <tr>
        <td>{{ $data>column1 }}</td>
        <td>{{ $data->column2 }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
