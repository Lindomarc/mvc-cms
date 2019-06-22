{% extends "Layout.ctp" %}
{% block title %} {{ title }} {% endblock %}
{% block content %}
    <h2>Página Inicial</h2>
    <button id="btn-list-notices">Listar Noticias</button>
    <div id="list"></div>

   <table class="table">
       <thead>
           <tr>
               <th>Id</th>
               <th>Title</th>
           </tr>
       </thead>
       <tbody>
           {% for notice in notices %}
           <tr>
               <td scope="row">{{ notice.id }}</td>
               <td>{{ notice.title }}</td>
           </tr>
           {% endfor %}
       </tbody>
       <tfoot>
           <tr>
               <td colspan="2">{{ links | raw }}</td>
           </tr>
       </tfoot>
   </table>

{% endblock %}