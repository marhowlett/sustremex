<?php
    /* Template Name: Producto */ 
    get_header();
?>
<section id="objetivo" class="template-section">
       <div class="contenedor">
       <h2 class="claro">NUESTROS PRODUCTOS</h2>
       <p class="blanco">Fabricamos y distribuimos <span>sustrato de fibra de coco 100% orgánica</span> asi como <span>bolsas - maceta hidropónicas</span> de diferentes medidas,  capacidades, colores, doble capa y perforaciones de drenaje.</p>
    </div>
</section>
<section id="fabricamos3" class="template-section">
       <div class="contenedor">
        
          <h2>Sustrato de Fibra de Coco 100% orgánica</h2>
          <div class="grid">
              <div class="col">
                
           <h3 class="especial">Disponible en 3 presentaciones</h3>
                 <ul>
                     <li>Big bales de 3,300 litros
</li>
                     <li>Pallets de 2 big bales cada uno.</li>
                     <li>Contenedor de 30 tarimas (pallets) con 60 Big bales en total.</li>
                 </ul>
                 
              </div>
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fibra.png" alt="Logo">
                </div>
             
          </div>
           
       </div>
        
</section>
<section id="productos" class="template-section">
<div class="contenedor">
<h2>BOLSAS - MACETA</h2>

<?php echo do_shortcode('[woodmart_products layout="carousel" spacing="20" slides_per_view="4" autoplay="no" hide_pagination_control="no" hide_prev_next_buttons="no" center_mode="no" wrap="no" sale_countdown="0" stock_progress_bar="0" highlighted_products="0" products_bordered_grid="0" lazy_loading="no" scroll_carousel_init="no"]'); ?>
</div>
</section>
<section id="especificaciones" class="template-section">
<div class="contenedor">
    <div class="ban">
        <h3 class="blanco">ESPECIFICACIONES DE FIBRA DE COCO
<span>Sustramex fibra de calidad suprema</span></h3>
    </div>
    <table>
<tbody>
<tr>
<th>Descripción</th>
<th class="center">Grado mediano</th>
<th class="center"> Grado grueso</th>
<th class="center">Grado Fino 	</th>
<th class="center">Germinación	</th>
</tr>
<tr style="width: 20%;">
<td>Densidad KG/M3 hum 34%</td>
<td class="center">151 kg</td>
<td class="center">118 kg</td>
<td class="center">159 kg</td>
<td class="center">165 kg</td>

</tr>
<tr style="width: 20%;">
<td>Retención de agua Vol %</td>
<td class="center">42.70%</td>
<td class="center">38%</td>
<td class="center">48.00%</td>
<td class="center">68%</td>
</tr>
<tr style="width: 20%;">
<td>Espacio de aire Vol %</td>
<td class="center">48%</td>
<td class="center">52%</td>
<td class="center">42%</td>
<td class="center">31%</td>
</tr>
<tr style="width: 20%;">
<td>Electro Conductividad</td>
<td class="center">1.3 ds/m</td>
<td class="center">1.2 ds/m</td>
<td class="center">1.5 ds/m</td>
<td class="center">1.7 ds/m</td>
</tr>
<tr style="width: 20%;">
<td>pH</td>
<td class="center">6</td>
<td class="center">6</td>
<td class="center">6</td>
<td class="center">7</td>
</tr>
<tr style="width: 20%;">
<td>TEC intercambio Ceteonico</td>
<td class="center">77 meg/kg</td>
<td class="center">85 meg/kg</td>
<td class="center">92 meg/kg</td>
<td class="center">232 meg/kg</td>
</tr>
<tr style="width: 20%;">
<td>Es ideal para cultivar:</td>
<td class="center">Fresa, tomate e higo</td>
<td class="center">Arándano</td>
<td class="center">Hortalizas</td>
<td class="center">Germinar semillas</td>
</tr>
</tbody>
</table>
</div>
</section>
<section id="beneficio" class="template-section">
<div class="contenedor">
   <h2 class="blanco">BENEFICIOS</h2>
   <div class="grid">
   
    <div class="col">
       <div class="ban">
        <h3 class="blanco">El sustrato de fibra de coco le ofrece a sus cultivos los siguientes beneficios:</h3>
        <ul>
            <li>> Un soporte específico de la raíz. </li>
            <li>> Retención de la humedad
homogénea en toda la bolsa.</li>
       <li>> Porosidad para una mayor
oxigenación de la raíz.</li>
       <li>> Mayor filtración y drenaje.</li>
       <li>> PH de 6</li>
        </ul>
    </div>
     </div>
    <div class="col">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/beneficio2.png" alt="Logo">
    </div>
   
    </div>
    
</div>
</section>
<section id="optimo" class="template-section">
   <div class="contenedor">
       <h3>¡Garantice el desarrollo óptimo de sus plantas,
con mayor calidad y cantidad de frutas!</h3>
       <div class="center">
           <a href="https://sustramex.com/#contacto"  class="btn"> <span>CONTÁCTENOS</span></a>
       </div>
   </div>
    
</section>
<?php 
    get_footer();
?>