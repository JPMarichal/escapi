<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('libros')->delete();
        
        \DB::table('libros')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Estudio y análisis del libro de Génesis',
                'description' => 'Explora los orígenes del universo y de la humanidad, y el convenio de Dios con Abraham que cimenta las bases de la fe y la identidad del pueblo de Israel.

',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 1,
                'nombre' => 'Génesis',
                'abreviatura' => 'Gén.',
                'abreviatura_online' => 'gen',
                'num_capitulos' => 50,
                'palabra_clave' => 'Orígenes',
                'concepto_principal' => 'El Convenio de Abraham',
                'autor' => 'Moisés',
            'autor_why' => '<p>Aunque el libro del Génesis no nombra a su autor, las Escrituras y gran parte de la historia de la iglesia atribuyen el libro a Moisés. Tanto el Antiguo como el Nuevo Testamento testifican repetidamente la autoría mosaica del Pentateuco (por ejemplo, Josué. 1:7; Dan. 9:11-13; Lucas 16:29; Juan 7:19; Hechos 26:22; Rom. 10:19), y la autoría mosaica no fue seriamente cuestionada hasta el siglo XVIII. Los cristianos conservadores y los judíos siguen reconociendo a Moisés como el autor sobre la base del testimonio de las Escrituras y la ausencia de alternativas plausibles.
</p><p>
La revelación de los últimos días brinda soporte adicional a este punto de vista. El <a href="libro_escrituras.php?id=84" target="_blank">libro de Moisés</a>, en la Perla de Gran Precio, nos permite apreciar el proceso por el cual fue escrito el Génesis, tanto por la revelación directa recibida por el profeta Moisés, como por la consulta de fuentes existentes, tales como el libro de memorias de Adán y los registros del profeta Enoc.</p>',
                'f_redaccion' => '~1400 AC',
            'fecha_redaccion_why' => '<p>Al escribir el libro del Génesis, Moisés utilizó sin duda fuentes escritas y tradiciones orales más antiguas, así como material que le fue revelado directamente por Dios (Núm. 12:8). Formado en la "sabiduría de los egipcios" (Hechos 7:22), Moisés había sido providencialmente preparado para comprender e integrar, bajo la inspiración de Dios, todos los registros, manuscritos y narraciones orales disponibles. La composición del libro se llevó a cabo probablemente durante el exilio de Israel en el desierto (c. 1446-1406 a.C.).</p>',
                'descripcion' => '',
            'introduccion' => '<p>Como su título indica, Génesis es un libro de comienzos (la palabra "Génesis" viene del término griego que significa origen, fuente, nacimiento o comienzo). En su descripción de la creación del mundo por parte de Dios, la caída del hombre, los orígenes de los pueblos de la tierra y los comienzos de la relación de alianza de Dios con su pueblo elegido, Israel, el libro de Génesis proporciona el contexto y establece el escenario para el resto de las Escrituras.</p>',
                'temas_estructura' => '<h3>Los once "toledots"</h3>
<p>La estructura literaria del Génesis se construye alrededor de once
unidades genealógicas separadas. Cada una de ellas está encabezada por la
palabra "generaciones". Son fáciles de reconocer porque casi siempre empiezan con la frase "Estas son las
generaciones de..." o "El libro de las generaciones de...", seguida por una genealogía más o menos breve.</p>
<p>Estas unidades, llamadas en hebreo "toledots", constituyen
la estructura más básica del primer libro de la Biblia, de forma tal que
el Génesis puede ser visto como un sólo registro genealógico o colección
de genealogías. Los once toledots o libros de genealogías del Génesis son:</p>
<ol>
<li>Introducción a las generaciones (1:1-2:3); </li>
<li>El cielo y la tierra (2:4-4:26); </li>
<li>Adán (5:1-6:8);</li>
<li>Noé (6:9-9:29); </li>
<li>Hijos de Noé (10:1-11: 9); </li>
<li>Sem (11:10-26); </li>
<li>Taré (11:27-25:11); </li>
<li>Ismael (25:12-18); </li>
<li>Isaac (25:19-35:29); </li>
<li>Esaú (36:1-37:1); </li>
<li>Jacob (37:2-50:26).</li>
</ol>
<h3>Los cuatro eventos y cuatro personajes</h3>
<p>Otro enfoque, más fácil de reconocer y recordar, es concebir el Génesis en dos partes, una dedicada a explicar el origen del hombre y otra dedicada a explicar el origen del pueblo del convenio de Dios. Cada una de estas partes puede subdividirse a la vez en cuatro elementos.</p>
<p>El Génesis es el primer capítulo de la historia de la redención del
hombre. En esta obra se destacan cuatro grandes acontecimientos y cuatro
grandes personajes.</p>
<h4>Los cuatro eventos</h4>
<p>Los capítulos 1-11 están dominados por cuatro eventos trascendentales que
forman la base de toda la historia bíblica posterior.</p>
<ol>
<li><strong>La Creación:</strong> Dios es el creador soberano de la
materia y la energía, el espacio y el tiempo. Los seres humanos son la
cúspide de esta creación.</li>
<li><strong>La Caída:</strong> Aunque originalmente era buena, esta
creación se sometió a la corrupción por el pecado de Adán. A pesar de la
devastadora maldición de la Caída, Dios promete una esperanza de
redención a través de la semilla de la mujer (3:15).</li>
<li><strong>El Diluvio: </strong>A medida que la humanidad se multiplica,
el pecado también se multiplica hasta que Dios se ve obligado a destruir
la raza humana con la excepción de Noé y su familia.</li>
<li><strong>La dispersión de las naciones: </strong>Aunque todos somos
hijos de Adán a través de Noé, Dios fragmenta la cultura y el idioma del
mundo posterior al diluvio y dispersa a los pueblos sobre la faz de la
tierra.</li>
</ol>
<h4> Los cuatro personajes</h4>
<p> Los capítulos 12-50 tratan de cuatro importantes personajes originadores de grandes pueblos (Abraham y sus
descendientes Isaac, Jacob y José), a través de los cuales Dios bendecirá
a las naciones. El llamamiento de Abraham (cap. 12) es el punto central del
libro. Las promesas del convenio que Dios hace con Abraham, llamado el Convenio Abrahámico, son fundamentales
para el plan de Dios para llevar la salvación a todos los pueblos. </p>',
                'sumario' => 'Génesis es el origen. Cool.',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/gen/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Estudio y análisis del libro de Éxodo',
                'description' => 'Sigue la liberación de Israel de Egipto, la entrega de los Diez Mandamientos y el establecimiento del pacto en el Sinaí.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 1,
                'nombre' => 'Éxodo',
                'abreviatura' => 'Éx.',
                'abreviatura_online' => 'ex',
                'num_capitulos' => 40,
                'palabra_clave' => 'Redención',
                'concepto_principal' => 'Salvación por sangre y poder',
                'autor' => 'Moisés',
            'autor_why' => '<p>Junto con el resto del Pentateuco (Génesis-Deuteronomio), las Escrituras atribuyen el Éxodo a Moisés. Algunas partes del Éxodo nombran específicamente a Moisés como autor (17:14; 24:3, 4; 34:27), y los escritores del Antiguo y del Nuevo Testamento coinciden en reconocer la autoría mosaica (Mal. 4:4; Juan 1:45; Rom. 10:5). Además, el propio Jesús reconoce el origen mosaico del libro (Marcos 7:10; 12:26; Lucas 20:37; Juan 5:46, 47; 7:19-23).
</p><p>
Desde el siglo XVIII, algunos estudiosos han cuestionado la autoría mosaica del Éxodo en favor de una serie de fuentes orales y escritas que fueron entretejidas por editores en una etapa tardía de la historia de Israel. Estos argumentos están lejos de ser concluyentes, sobre todo porque no se ha llegado a un acuerdo duradero sobre el carácter y el alcance precisos de los documentos que supuestamente se encuentran detrás del texto del Éxodo tal y como lo tenemos ahora.</p>',
                'f_redaccion' => '~1400 AC',
            'fecha_redaccion_why' => '<p>Al igual que el resto del Pentateuco, el Éxodo fue escrito durante el peregrinaje de Israel por el desierto, entre la época del Éxodo y la muerte de Moisés. Probablemente, Moisés guardó un registro de la obra de Dios, que luego editó en las Llanuras de Moab poco antes de su muerte (c. 1406 a.C.).
</p><p>
La cuestión de la fecha del libro del Éxodo está relacionada con la fecha del acontecimiento del Éxodo. En Primera de Reyes 6:1 se afirma que el Éxodo ocurrió 480 años antes de la fundación del templo (966 a.C.), lo que implica una fecha de 1446 a.C. para el Éxodo de Egipto. Algunos estudiosos sostienen que las pruebas arqueológicas apuntan a una fecha de aproximadamente 1275 a.C., y afirman que los 480 años de 1 Reyes 6:1 deben considerarse un número simbólico (una generación de cuarenta años multiplicada por las doce tribus es igual a 480). Sin embargo, la evidencia arqueológica es ambigua, y aquí se adopta la fecha de 1446 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro del Éxodo registra la redención del pueblo de Israel de la esclavitud en Egipto y su establecimiento como nación gobernada por los términos del pacto de Dios y las leyes de Dios. Durante los aproximadamente cuatrocientos años en Egipto, la familia de Jacob pasó de ser de setenta personas a tener entre dos y tres millones.
</p><p>
Los judíos de habla hebrea siempre han utilizado las palabras hebreas iniciales del libro del Éxodo como su título, llamándolo ve\'elleh shemot, que significa "Ahora estos son los nombres". El título griego es Éxodo, una palabra que significa "salida", "partida" o "salida".</p>',
            'temas_estructura' => '<p>El libro del Éxodo se divide fácilmente en dos secciones principales: la redención de la esclavitud en Egipto (caps. 1-18) y la revelación de Dios en el Monte Sinaí (caps. 19-40).
</p><p>
El concepto de redención es fundamental en el libro del Éxodo. Debido a su fidelidad a las promesas del pacto hechas a Abraham, Isaac y Jacob, Dios libera a su pueblo de la esclavitud, lo preserva durante el vagabundeo por el desierto y lo prepara para entrar en la Tierra de la Promesa.
</p><p>
Israel fue redimido de la esclavitud en Egipto y entró en una relación de pacto con Dios. Ahora que el pueblo había experimentado la liberación, la guía y la protección de Dios, estaba listo para que se le enseñara lo que Dios esperaba de él. En el monte Sinaí, Moisés recibió las leyes morales, civiles y ceremoniales de Dios, así como el modelo del tabernáculo que debía construirse en el desierto.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/ex/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Estudio y análisis del libro de Levítico',
                'description' => 'Adéntrate en las leyes y rituales dados a Israel para guiar su culto y vida comunal, enfatizando la santidad y la pureza.

',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 1,
                'nombre' => 'Levítico',
                'abreviatura' => 'Lev.',
                'abreviatura_online' => 'lev',
                'num_capitulos' => 27,
                'palabra_clave' => 'Santidad',
                'concepto_principal' => 'El día de la expiación',
                'autor' => 'Moisés',
            'autor_why' => '<p>El tipo de argumentos utilizados para confirmar la autoría mosaica del Génesis y el Éxodo se aplican también al Levítico, porque el Pentateuco es una unidad literaria. El contenido del propio libro también apunta con fuerza a Moisés como autor humano. Cincuenta y seis veces en los veintisiete capítulos del Levítico se afirma que Dios impartió estas leyes a Moisés (véase, por ejemplo, 1:1; 4:1; 6:1, 24; 8:1).</p>',
                'f_redaccion' => '~1400 AC',
            'fecha_redaccion_why' => '<p>Probablemente, Moisés escribió gran parte del Levítico durante la última parte del campamento israelita en el Sinaí, aunque es posible que le diera forma final poco antes de su muerte. El contenido del Levítico abarca un período de aproximadamente un mes entre la erección del tabernáculo (Ex. 40:17) y la salida del Sinaí (Núm. 10:11).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Se ha dicho que Dios sólo tardó una noche en sacar a Israel de Egipto, pero tardó cuarenta años en sacar a Egipto de Israel. En el Éxodo, Israel es redimido y establecido como un reino de sacerdotes y una nación santa; y en el Levítico se le enseña a Israel cómo cumplir con su llamado sacerdotal. En el Éxodo se les sacó de la tierra de la esclavitud y en el Levítico se les condujo al santuario de Dios. Pasan de la redención al servicio, de la liberación a la dedicación.
</p><p>
El título hebreo del libro es wayyiqra, la primera palabra del texto significa "Y Él llamó". El título griego que aparece en la Septuaginta es Leutikon (que significa "lo que pertenece a los sacerdotes"), del que la versión latina de la Vulgata derivó el título Levítico. El título es algo engañoso, pues aunque el libro trata ampliamente de los sacerdotes y sus diversas tareas, hay que recordar que todos los israelitas debían conocer y cumplir la Ley.</p>',
            'temas_estructura' => '<p>El libro de Levítico se centra en el concepto de la santidad de Dios, y en cómo un pueblo impío puede acercarse a Él de forma aceptable y permanecer en comunión continua. El camino hacia Dios es sólo a través del sacrificio de sangre, y el caminar con Dios es sólo a través de la obediencia a Sus Leyes. La palabra "santo" aparece noventa veces en el Levítico, y la palabra "santificar", diecisiete veces. La raíz hebrea q-d-sh, "santo" (en forma de adjetivo, sustantivo y verbo) aparece 152 veces en el libro de Levítico.</p>
<p>El libro de Levítico se divide en dos secciones principales: la primera trata principalmente del sistema de sacrificios de culto (caps. 1-17), y la segunda trata principalmente de la santificación del pueblo de Israel en su conjunto mediante la santidad ceremonial y moral (caps. 18-27).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/lev/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Estudio y análisis del libro de Números',
                'description' => 'Recorre el viaje de Israel por el desierto, enfrentando pruebas y recibiendo instrucciones divinas para su futuro en la Tierra Prometida.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 1,
                'nombre' => 'Números',
                'abreviatura' => 'Núm.',
                'abreviatura_online' => 'num',
                'num_capitulos' => 36,
                'palabra_clave' => 'Errantes',
                'concepto_principal' => 'Rechazo a la generación rebelde',
                'autor' => 'Moisés',
            'autor_why' => '<p>Las pruebas que señalan a Moisés como autor de Números son similares a las de los libros anteriores del Pentateuco. Hay en Números más de ochenta afirmaciones de que "Yahveh habló a Moisés". Es evidente (33:2) que Moisés llevó un registro detallado como testigo ocular de los acontecimientos de este libro. Como personaje central de Éxodo a Deuteronomio, estaba mejor calificado que cualquier otra persona para escribir estos libros.
</p><p>
Algunos estudiosos han afirmado que las referencias a Moisés en tercera persona (p. ej., 8:23; 14:36; 15:1, 22) apuntan a un autor distinto de Moisés. Este uso de la tercera persona puede parecer inusual para la mente occidental, pero los escritores antiguos lo empleaban con frecuencia y se utiliza de forma constante en todos los libros en los que aparece el nombre de Moisés (p. ej., Éxodo 24:1; Levítico 6:1; Deuteronomio 5:1).</p>',
                'f_redaccion' => '~1400 AC',
            'fecha_redaccion_why' => '<p>Mientras que el libro de Levítico abarca sólo un mes, el libro de Números se extiende a lo largo de casi treinta y nueve años (c. 1444-1405 a.C.). Registra el movimiento de Israel desde los últimos veinte días en el monte Sinaí, las andanzas alrededor de Cades Barnea, y finalmente la llegada a las llanuras de Moab en el cuadragésimo año. No cabe duda de que Moisés llevó este registro de los acontecimientos en el curso de las andanzas por el desierto.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Números es el libro de las peregrinaciones. La mayor parte del libro describe las experiencias de Israel en el desierto. Israel como nación está en su infancia al comienzo de este libro, sólo trece meses después del Éxodo de Egipto. En Números, la nación pasa por un doloroso proceso de prueba y maduración en el que Dios enseña a su pueblo las consecuencias de la rebelión y las decisiones irresponsables. Los cuarenta años de experiencia en el desierto los transforman de una chusma de ex esclavos a una nación lista para tomar posesión de la Tierra Prometida.
</p><p>
El libro de los Números toma su nombre de las dos numeraciones de los israelitas: la primera en el Monte Sinaí (cap. 1) y la segunda en las llanuras de Moab (26:1-51). Los escritos judíos suelen referirse al libro por la quinta palabra hebrea en 1:1, bemidbar, que significa "en el desierto". El título griego en la Septuaginta es Arithmoi, que significa "números", un término tomado en la Vulgata latina donde el título se traduce Liber Numeri, "Libro de los Números".</p>',
            'temas_estructura' => '<p>El libro de Números puede dividirse en tres secciones principales: comienza con la antigua generación (1:1-10:10), pasa por un trágico período de transición (10:11-25:18), y termina con la nueva generación a las puertas de la tierra de Canaán (caps. 26-36).
</p><p>
Números registra dos generaciones (caps. 1-14 y 21-36), dos numeraciones (caps. 1 y 26), dos viajes (caps. 10-14 y 21-27) y dos series de instrucciones (caps. 5-9 y 28-36). Ilustra tanto la bondad como la severidad de Dios (Rom. 11:22) y enseña que el pueblo de Dios sólo puede avanzar si confía y depende de Él.
</p><p>
El tema del juicio divino sobre la incredulidad es prominente en Números, que registra el fracaso de Israel en creer en la promesa de Dios y el juicio resultante de vagar en el desierto durante cuarenta años. El punto de inflexión crítico del libro puede verse en el capítulo 14, cuando Israel hizo caso de las advertencias de los temerosos espías y rechazó a Dios al negarse a subir y conquistar la Tierra Prometida. Dios juzga a Israel "según el número de los días en que espiasteis la tierra, cuarenta días, pues cada día llevaréis vuestra culpa un año, es decir, cuarenta años, y conoceréis mi rechazo" (14:34).
</p><p>
Sin embargo, el libro de Números es más que una advertencia contra la incredulidad y la desobediencia. A lo largo de todo el libro se da testimonio de la gracia y la misericordia de Dios y se señala la gracia divina que se manifestará en Jesucristo. La presencia y la guía divinas son evidentes en la columna de fuego y la nube (10:11). El cuidado de Dios por su pueblo se ve en la provisión diaria de maná como alimento y en la roca que proporcionaba agua para que el pueblo bebiera, dones que prefiguran la venida de Cristo (Juan 6:31-33; 1 Cor. 10:4). Una vívida ilustración de la misericordia divina se ve en la provisión de la serpiente de bronce como medio para curar a los que habían sido mordidos por serpientes venenosas, una imagen de la crucifixión (21:4-9; cf. Juan 3:14).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/num/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Estudio y análisis del libro de Deuteronomio',
                'description' => 'Explora los tres discursos de Moisés que repasan la ley y preparan a Israel para entrar en la Tierra Prometida, subrayando la obediencia a Dios.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 1,
                'nombre' => 'Deuteronomio',
                'abreviatura' => 'Deut.',
                'abreviatura_online' => 'deut',
                'num_capitulos' => 34,
                'palabra_clave' => 'Convenio',
                'concepto_principal' => 'Ratificación formal del convenio',
                'autor' => 'Moisés',
                'autor_why' => '<p>La autoría mosaica del Deuteronomio ha sido vigorosamente atacada por los críticos que afirman que Moisés es sólo el originador de las tradiciones en las que se basan estas leyes. El argumento habitual es que el libro fue escrito de forma anónima no mucho antes del año 621 a.C. y utilizado por el rey Josías para llevar a cabo su reforma religiosa.
</p><p>
Sin embargo, las pruebas internas y externas de la autoría mosaica son sólidas. El propio Deuteronomio incluye unas cuarenta afirmaciones de que lo escribió Moisés. El libro parece corresponder a la época de Moisés, no a la de Josías, y los detalles geográficos e históricos indican un conocimiento de primera mano del periodo entre el Éxodo y la Conquista. Además, el resto del Antiguo Testamento atribuye el Deuteronomio y el resto del Pentateuco a Moisés (Jos. 1:7; Jue. 3:4; 1 Re. 2:3; Esdras 3:2; Sal. 103:7; Mal. 4:4). El propio Cristo lo atribuye directamente a Moisés (Mateo 19:7-9; Juan 5:45-47). Por último, estudios recientes han demostrado que el Deuteronomio parece seguir la forma de tratado utilizada en los siglos XV y XIV a.C., una forma apropiada para este documento de renovación del pacto.</p>',
                'f_redaccion' => '~1400 AC',
            'fecha_redaccion_why' => '<p>Al igual que el Levítico, el Deuteronomio no avanza históricamente. Se desarrolla enteramente en las llanuras de Moab, al este de Jericó y del río Jordán, y abarca aproximadamente un mes. El libro fue escrito al final del período de cuarenta años en el desierto (c. 1405 a.C.), cuando la nueva generación estaba a punto de entrar en Canaán.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de Deuteronomio consiste en una serie de mensajes de despedida del líder de Israel, Moisés, de 120 años de edad. Se dirige a la nueva generación destinada a poseer la Tierra de la Promesa. Al igual que el libro de Levítico, el libro de Deuteronomio contiene una gran cantidad de detalles legales, pero, a diferencia de Levítico, hace hincapié en el pueblo y no en los sacerdotes. Moisés recuerda a la nueva generación la importancia de la obediencia si quieren aprender del triste ejemplo de sus padres.
</p><p>
El nombre del libro procede de la palabra griega <i>Deuteronomion</i>, que significa "segunda ley", y que se utilizó incorrectamente en la Septuaginta para traducir Deut. 17:18 (la RVR lo traduce correctamente como "una copia de esta ley"). Sin embargo, el libro de Deuteronomio no es una segunda ley, sino una adaptación y expansión de gran parte de la ley original dada en el Monte Sinaí.</p>',
                'temas_estructura' => '<p>El Deuteronomio, en su esquema más amplio, es el registro de la renovación de la alianza dada en el Monte Sinaí. Este pacto se revisa, se amplía, se extiende y finalmente se ratifica en las llanuras de Moab. Moisés logra esto principalmente a través de tres sermones que pasan de una retrospectiva, a una introspectiva, y finalmente a una mirada prospectiva de los tratos de Dios con Israel.
</p><p>
El primer sermón de Moisés (1:1-4:43) proporciona el trasfondo de la alianza al subrayar lo que Dios ha hecho por Israel desde el Éxodo de Egipto. Se destaca el tema de la provisión y protección de Dios a su pueblo, junto con el castigo divino que sigue a la desobediencia.
</p><p>
El segundo discurso abarca los requisitos específicos de la alianza, adaptando las leyes del Éxodo a la nueva situación que prevalecería después de que hubieran entrado en la Tierra Prometida. Así, se presta especial atención a las prohibiciones de la idolatría y otras prácticas paganas, al establecimiento de un santuario central y a la preparación de un reino.
</p><p>
En el tercer discurso Moisés escribe la historia por adelantado. Predice lo que le ocurrirá a Israel en un futuro próximo (bendiciones y maldiciones) y en un futuro lejano (dispersión entre las naciones y eventual retorno). Moisés enumera los términos de la alianza que pronto será ratificada por el pueblo. Por último, como Moisés no podrá entrar en la tierra, nombra a Josué como su sucesor y pronuncia un discurso de despedida a la nación. El capítulo 34 contiene una necrológica de Moisés, quizá escrita por su sucesor Josué.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/deut/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Estudio y análisis del libro de Josué',
                'description' => 'Descubre la conquista de Canaán bajo Josué, las batallas para establecer Israel en la tierra y la repartición de territorios entre las tribus.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Josué',
                'abreviatura' => 'Josué',
                'abreviatura_online' => 'josh',
                'num_capitulos' => 24,
                'palabra_clave' => 'Conquista',
                'concepto_principal' => 'Revisión del cometido al convenio',
                'autor' => 'Incierto',
            'autor_why' => '<p>La tradición judía atribuye la autoría de este libro al propio Josué, y no hay duda de que algunas partes del libro deben atribuirse a él (24:26). Sin embargo, algunas narraciones se añadieron posteriormente, como la captura de Quiriat Sepher por parte de Othniel (15:13-19), la migración de Dan hacia el norte (19:47) y el relato de la muerte y el entierro de Josué (24:29-33). Además, la frase recurrente "hasta el día de hoy" (5:9; 13:13; 15:63) indica un momento de escritura posterior a los propios acontecimientos. Por lo tanto, la composición final del libro se completó después de la vida de Josué, tal vez tan tarde como el período del reino temprano bajo Saúl.</p>',
                'f_redaccion' => 'Incierta',
            'fecha_redaccion_why' => '<p>Aunque la fecha exacta de la composición de Josué es incierta, los acontecimientos descritos tienen lugar entre el comienzo de la Conquista (1405 a.C.) y la muerte de Josué (hacia 1390 a.C.). Sin embargo, si se acepta la fecha más tardía del Éxodo (véase Éxodo), el inicio de la Conquista se situaría en torno a 1250-1200 a.C.</p>',
                'descripcion' => '',
            'introduccion' => '<p>Josué, el primero de los doce libros históricos (Josué-Esther), establece un vínculo entre el Pentateuco y el resto de la historia de Israel. A través de tres grandes campañas militares, el pueblo de Israel aprende una lección crucial bajo el capaz liderazgo de Josué: la victoria llega a través de la fe en Dios y la obediencia a su palabra, más que a través de la superioridad numérica o militar.
</p><p>
Este tema queda subrayado por el propio nombre del libro. El nombre de Josué, que significa "Yahvé es la salvación", simboliza el hecho de que, aunque él es el líder de Israel durante la conquista, el Señor es el Conquistador.</p>',
                'temas_estructura' => '<p>El libro de Josué se divide claramente en dos secciones principales: los capítulos 1-12 registran la Conquista; los capítulos 13-24 describen la asignación de territorios tribales y la dispersión de las tribus por la Tierra de Promisión.
</p><p>
El tema de la conquista y la ocupación impregna el libro de Josué. El escenario de los primeros cinco capítulos comienza al este del río Jordán, cuando Josué sustituye a Moisés, e Israel cruza el Jordán en tierra firme y se prepara para la guerra. Como un sabio general, Josué utiliza una estrategia de "divide y vencerás". Su campaña comienza en el centro de Canaán (caps. 6-8), impidiendo así una masiva alianza cananea contra Israel. A continuación, Josué se desplaza al sur de Canaán (caps. 9 y 10) y, finalmente, al norte de Canaán (caps. 11 y 12).
</p><p>
Aunque no hay profecías mesiánicas directas en el libro, Josué es claramente un tipo de Cristo. Su nombre Yeshua ("Yahvé es la salvación") es el equivalente hebreo del nombre "Jesús". En su papel de conducir triunfalmente al pueblo a sus posesiones, prefigura a Aquel que llevará "a muchos Hijos a la gloria" (Heb. 2:10).
</p><p>
El cordón escarlata, que proporcionó seguridad a Rahab y a su casa (Josué 2:17-21), representa la seguridad a través de la sangre de Jesús (Heb. 9:19-22). Sorprendentemente, esta mujer gentil se encuentra en la genealogía de Jesucristo (Mateo 1:5).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/josh/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Estudio y análisis del libro de Jueces',
                'description' => 'Observa los ciclos de apostasía, opresión y liberación en Israel a través de líderes carismáticos que restauran la fe y el orden cada vez.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Jueces',
                'abreviatura' => 'Jue.',
                'abreviatura_online' => 'judg',
                'num_capitulos' => 21,
                'palabra_clave' => 'Ciclos',
                'concepto_principal' => 'Resumen del libro y los ciclos',
                'autor' => 'Incierto',
                'autor_why' => '<p>El autor de Jueces es anónimo, pero es posible que lo escribiera Samuel o uno de sus alumnos proféticos. La tradición judía contenida en el Talmud atribuye Jueces a Samuel, y ciertamente fue el vínculo crucial entre el período de los jueces y el de los reyes. Es probable que Samuel o uno de sus contemporáneos recopilara el libro a partir de fuentes orales y escritas.</p>',
                'f_redaccion' => '~1050 AC',
            'fecha_redaccion_why' => '<p>La fecha aproximada de composición puede fijarse por una serie de afirmaciones en el propio libro. Los pasajes 18:31 y 20:27 muestran que Jueces fue escrito después de que el arca de la alianza fuera retirada de Silo (cf. 1 Sam. 4:3-11). La repetida frase "En aquellos días no había rey en Israel" (17:6; 18:1; 19:1; 21:25) indica que Jueces se escribió después del comienzo de la monarquía. El hecho de que los jebuseos habiten en Jerusalén "hasta el día de hoy" (1:21) significa que fue escrito antes del año 1004 a.C., cuando David tomó el control de la ciudad (2 Sam. 5:5-9).
</p><p>
Los acontecimientos tratados en Jueces abarcan desde el año 1380 a.C. hasta el 1045 a.C. Evidentemente, los mandatos de algunos de los jueces se solapan, ya que no todos ellos gobernaron toda la tierra. Jueces describe ciclos de apostasía, opresión y liberación en la región del sur (3:7-31), la región central (6:1-10:5), la región oriental (10:6-12:15) y la región occidental (13:1-16:31).</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de los Jueces contrasta con Josué. En Josué, un pueblo obediente conquistó la tierra confiando en el poder de Dios. En Jueces, sin embargo, un pueblo desobediente e idólatra es oprimido repetidamente por sus enemigos.
</p><p>
El título hebreo del libro es Shophetim, que significa "jueces". La palabra no sólo conlleva la idea de mantener la justicia y resolver las disputas, sino que también puede tener el significado de "liberar" y "entregar". Primero los jueces liberan al pueblo, luego gobiernan y administran la justicia.</p>',
                'temas_estructura' => '<p>El libro de los Jueces está organizado principalmente según líneas temáticas más que cronológicas. El libro se abre con una descripción del deterioro de Israel, continúa con siete ciclos de opresión y liberación, y concluye con dos vívidos ejemplos de la depravación de Israel.
</p><p>
El tema del deterioro se pone de manifiesto cuando Jueces comienza con unos éxitos militares de corta duración tras la muerte de Josué, pero rápidamente se centra en el repetido fracaso del pueblo a la hora de expulsar a sus enemigos. Las principales razones de su fracaso son la falta de fe y la falta de obediencia a Dios (2:1-3).
</p><p>
Las repetidas liberaciones de Dios se describen en la sección media del libro (3:5-16:31), que presenta siete ciclos de apostasía, opresión, grito de liberación, salvación y descanso. Israel vacila entre la obediencia y la apostasía, ya que el pueblo no aprende continuamente de sus errores. Sin embargo, los tiempos de descanso y paz son más largos que los tiempos de esclavitud, y la monotonía de los pecados de Israel puede contrastarse con la creatividad de los métodos de liberación de Dios.
</p><p>
La depravación característica de la época de los jueces se ilustra en los capítulos 17-21 con vívidos ejemplos de idolatría e inmoralidad personal y tribal. El libro en su conjunto ilustra los tristes resultados de la desobediencia de Israel, como se resume en 21:25: "En aquellos días no había rey en Israel; cada uno hacía lo que le parecía bien."</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/judg/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Estudio y análisis del libro de Rut',
                'description' => 'Conoce la lealtad y redención en la historia de Rut, la moabita que se unió a Israel y se convirtió en antepasado del rey David y de Jesucristo.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Rut',
                'abreviatura' => 'Rut',
                'abreviatura_online' => 'ruth',
                'num_capitulos' => 4,
                'palabra_clave' => 'Pariente/Redentor',
                'concepto_principal' => 'Rut se ubica en la línea de David y Jesús',
                'autor' => '¿Samuel?',
                'autor_why' => '<p>El texto no identifica al autor de Rut. La tradición judía atribuye la obra a Samuel, pero esto es poco probable ya que David aparece en Rut 4:17, 22, y Samuel murió antes de la coronación de David como rey. La composición del libro data probablemente de los primeros tiempos del reino. El hecho de que el hijo de David, Salomón, no se mencione en la genealogía puede indicar que Rut se escribió durante el reinado de David. Sin embargo, el anonimato de la obra no debe restarle valor espiritual ni belleza literaria.</p>',
                'f_redaccion' => '~1000 AC',
            'fecha_redaccion_why' => '<p>Aunque la fecha de composición es incierta, la historia de Rut tiene lugar en la última parte del periodo de los jueces (hacia el 1100 a.C.) y abarca un periodo de unos doce años. Este período de la historia de Israel fue, en general, un desierto de rebelión e inmoralidad, pero la historia de Rut contrasta como un oasis de integridad y rectitud.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Rut es una historia de amor, devoción y redención situada en el angustioso contexto del período de los jueces. Presenta a una mujer moabita que abandona su herencia pagana para aferrarse al pueblo de Israel y al Dios de Israel. Por su fidelidad en una época de falta de fe nacional, Dios la recompensa dándole un nuevo marido, un hijo y una posición privilegiada en la línea ancestral de David y Cristo.</p>',
            'temas_estructura' => '<p>La breve pero hermosa historia de Rut está elaborada con esmero por su desconocido autor. Como demuestra el gráfico "Rut de un vistazo", la narración es simétrica, con una estructura de elementos paralelos que se unen en la mitad del libro (el final del cap. 2).
</p><p>
Esta estructura literaria sirve para destacar varios temas importantes. El más destacado es el tema de la redención. La palabra hebrea para pariente (goel) aparece trece veces en Rut y significa básicamente "el que redime". Al recomprar la tierra de Noemí, así como al casarse con Rut y engendrar un hijo para mantener viva la línea familiar, Booz actúa como redentor. Esta redención temporal de Booz apunta a la obra redentora de Dios, que alcanza su punto álgido en la entrega de Cristo "para redimirnos de toda iniquidad" (Tito 2:14).
</p><p>
Otro término clave en el relato es "bondad", que significa lealtad al pacto (1:8; 2:20; 3:10). Rut y Booz ilustran lo que son la rectitud y la lealtad del pacto en una época en la que "cada uno hacía lo que le parecía bien" (Jue. 21:25). Esta lealtad se expresa en los mismos términos que describen la relación de alianza de Dios con su pueblo.
</p><p>
También se destaca la providencia de Dios. Aunque el libro describe a personas comunes en entornos comunes, estaban siendo guiadas por la misteriosa mano de Dios, que estaba utilizando su fe poco común para preparar el camino del mayor rey de Israel, David (4:22). El nombre de Dios aparece veintitrés veces en los ochenta y cinco versos de Rut. Ningún acontecimiento en la vida del pueblo de Dios es insignificante, porque Él está constantemente involucrado.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/ruth/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Estudio y análisis del libro de 1 Samuel',
                'description' => 'Descubre la dedicación de Samuel, último juez de Israel, su unción de Saúl y David como reyes, y la transición hacia la monarquía.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '1 Samuel',
                'abreviatura' => '1 Sam.',
                'abreviatura_online' => '1-sam',
                'num_capitulos' => 31,
                'palabra_clave' => 'Transición',
                'concepto_principal' => 'Transición de Saúl a David',
                'autor' => 'Samuel/Abiathar',
            'autor_why' => '<p>El libro de 1 Samuel es anónimo. La tradición judía afirma que el profeta Samuel escribió los libros que llevan su nombre, mientras que los profetas Gad y Natán aportaron información complementaria sobre los años posteriores a la muerte de Samuel (25:1). Sin embargo, no hay ninguna referencia a un autor en el libro. El texto bíblico sí indica que Samuel hizo algunos registros escritos (10:25) y que las figuras proféticas (Samuel, Natán y Gad) hicieron la crónica de muchos de los actos del rey David (1 Cr. 29:29). Dado que los profetas del Antiguo Testamento generalmente actuaban como historiadores de su época, no es improbable que los libros de Samuel fueran compilados por un profeta sin nombre a partir de los escritos de Samuel, Gad y Natán, así como de otras fuentes sin nombre.</p>',
                'f_redaccion' => '~1000 AC',
            'fecha_redaccion_why' => '<p>Debido a las referencias (por ejemplo, 27:6) que presuponen la división de Israel en reinos del norte y del sur, y a que no hay ninguna referencia a la caída de Samaria, la composición final de los libros de Samuel probablemente tuvo lugar entre la división de los reinos en el 931 a.C. y la caída de Samaria en el 722 a.C. Es probable que Samuel se compusiera a principios del reino dividido, quizás alrededor del 900 a.C.
</p><p>
El libro de 1 Samuel abarca el período de noventa y cuatro años que va desde el nacimiento de Samuel hasta la muerte de Saúl (c. 1105-1011 a.C.). Gran parte de él trata de los conflictos con los filisteos, contra los que Saúl y David lucharon repetidamente.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de 1 Samuel describe la transición del liderazgo en Israel de los jueces a los reyes. Tres personajes destacan en el libro: Samuel, el profeta y último juez; Saúl, el primer rey de Israel; y David, ungido como rey pero aún no reconocido como sucesor de Saúl.
</p><p>
Los dos libros de Samuel eran originalmente uno en el texto hebreo, pero se dividieron cuando se tradujeron al griego. Así, la Septuaginta (Antiguo Testamento griego) y las traducciones inglesas dividen a Samuel en dos libros, aunque esto introduce una división artificial en lo que en realidad es un relato continuo.</p>',
            'temas_estructura' => '<p>El libro de 1 Samuel registra la transición crucial de la teocracia bajo los jueces a la monarquía bajo los reyes. El libro se articula en torno a tres figuras clave: Samuel (caps. 1-7), Saúl (caps. 8-31) y David (caps. 16-31).
</p><p>
El libro describe el creciente deseo del pueblo de Israel de tener un rey, y el papel que desempeñaron varios individuos en el inicio y la continuación de la realeza hebrea. La realeza se describe como una cuestión más teológica que política. El Dios de Israel sigue siendo el verdadero Rey de Israel. El rey terrenal representaría a la nación ante Dios y sería responsable en última instancia ante Él. De hecho, el libro revela claramente que el éxito o el fracaso del rey ungido estaría determinado por su obediencia o desobediencia a la Ley y su compromiso con la voluntad de Dios.
</p><p>
Al presentar la realeza, 1 Samuel también presenta al mejor rey de Israel, David, que es elegido por Dios para sustituir a Saúl. Aunque no es perfecto, David demuestra ser un hombre según el "corazón de Dios" (13:14), y 2 Samuel 7:4-17 registra la institución de la Alianza Davídica, en la que Dios promete a David que el trono de su reino se establecerá para siempre, una promesa cumplida en el reinado eterno del descendiente de David, Jesús.
</p><p>
David es uno de los principales tipos del Antiguo Testamento de la persona de Cristo. Nació en Belén, trabaja como pastor y gobierna como rey de Israel. Se convierte en el precursor del Rey mesiánico; el Nuevo Testamento llama específicamente a Cristo la "semilla de David según la carne" (Rom. 1:3) y "la raíz y la descendencia de David" (Ap. 22:16).
</p><p>
Samuel también destaca las consecuencias del pecado. Primera de Samuel 15 registra la trágica transición de la realeza de Saúl a David. Como en los tres cambios de liderazgo registrados en 1 Samuel, Dios quita su bendición a uno y se la da a otro a causa del pecado. "Por haber rechazado la palabra de Yahveh, Él también te ha rechazado como rey" (15:23).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/1-sam/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Estudio y análisis del libro de 2 Samuel',
                'description' => 'Sigue la consolidación del reino bajo David, sus logros y desafíos personales, y la promesa divina de un linaje eterno.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '2 Samuel',
                'abreviatura' => '2 Sam.',
                'abreviatura_online' => '2-sam',
                'num_capitulos' => 24,
                'palabra_clave' => 'David',
                'concepto_principal' => 'El pecado de David',
                'autor' => 'Abiathar',
            'autor_why' => '<p>Al igual que 1 Samuel, 2 Samuel es anónimo, pero probablemente fue compuesto por un profeta sin nombre que recopiló crónicas escritas de profetas como Natán y Gad el vidente (1 Cr. 29:29). Además de estas fuentes escritas proféticas, el compilador utilizó evidentemente otra fuente llamada "Libro de Jasher" (1:18).</p>',
                'f_redaccion' => '~975 AC',
            'fecha_redaccion_why' => '<p>La fecha de composición de 1 y 2 Samuel fue en algún momento después de la muerte de Salomón y la división del reino (931 a.C.), pero antes de la destrucción de Samaria y el cautiverio asirio del reino del norte (722 a.C.). Es probable que Samuel se compusiera a principios del reino dividido, quizá hacia el 900 a.C.
</p><p>
El segundo libro de Samuel recoge los principales acontecimientos de los cuarenta años de gobierno de David. Su reinado en Hebrón comienza en 1011 y termina en 1004 a.C. Su reinado de treinta y tres años sobre el Judá e Israel unidos dura desde 1004 hasta 971 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de 2 Samuel recoge los momentos más destacados del reinado de David, primero sobre el territorio de Judá y, finalmente, sobre toda la nación de Israel. Se narra la ascensión de David al trono, sus pecados de adulterio y asesinato, y las consecuencias demoledoras de esos pecados sobre su familia y la nación.
</p><p>
Los dos libros de Samuel eran originalmente un relato continuo en el texto hebreo, pero las traducciones inglesas (siguiendo las traducciones griegas y latinas) dividen a Samuel en dos libros.</p>',
            'temas_estructura' => '<p>Segundo Samuel puede dividirse en tres partes: los triunfos de David (capítulos 1-10), las transgresiones de David (capítulo 11) y los problemas de David (capítulos 12-24).
</p><p>
El personaje central de 2 Samuel es David, en torno al cual está escrito todo el libro. La verdad clave ilustrada es la misma que el tema del Deuteronomio: la obediencia a Dios trae bendición, y la desobediencia trae problemas y juicio. Los primeros diez capítulos describen las recompensas de la obediencia cuando el gobierno de David se extiende primero sobre Judá y luego sobre todo Israel. Los crímenes de David, el adulterio y el asesinato, descritos en el capítulo 11, marcan el punto de inflexión del libro. Después de esto, la vida de David es una crónica de problemas y miseria: la muerte de un hijo pequeño, el incesto y el asesinato entre los hijos de David, y la rebelión contra el reinado de David.</p><p>
Aunque 2 Samuel muestra que la obediencia o desobediencia de una persona a Dios tiene consecuencias directas en la vida de esa persona, también demuestra que, a pesar de estas consecuencias, Dios gobernará y anulará para que su propósito a largo plazo de bendición y redención del mundo pueda ocurrir. Así, por ejemplo, aunque el pecado de David con Betsabé resultó en una pérdida trágica para todos los involucrados, fue Betsabé quien daría a luz a Salomón.
</p><p>
El propósito de redención a largo plazo de Dios es evidente en el pacto que Dios hace con David en 7:4-17, en el que Dios promete a David un reino, un trono y una descendencia eternos. Aunque hay nueve dinastías diferentes en el reino del norte de Israel, sólo hay una dinastía en Judá: la línea de David. La promesa de una dinastía permanente se cumple en Cristo, el "Hijo de David" (Mateo 21:9; 22:45) que se sentará en el trono de David (Is. 9:7; Lucas 1:32).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/2-sam/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Estudio y análisis del libro de 1 Reyes',
                'description' => 'Adéntrate en el reinado de Salomón, su sabiduría, la construcción del Templo en Jerusalén y la posterior división del reino.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '1 Reyes',
                'abreviatura' => '1 Rey.',
                'abreviatura_online' => '1-kgs',
                'num_capitulos' => 22,
                'palabra_clave' => 'Divisiones del reino',
                'concepto_principal' => 'El reino queda dividido',
                'autor' => '¿Jeremías?',
                'autor_why' => '<p>Se desconoce el autor de 1 y 2 Reyes, aunque la tradición judía atribuye la obra al profeta Jeremías. Todo lo que se puede decir con certeza es que Reyes fue compilado a partir de varias fuentes y escrito desde una perspectiva profética.
</p><p>
El autor menciona tres fuentes primarias. El "libro de los hechos de Salomón" (11:41) parece haber contenido anales, datos biográficos y extractos de los archivos del templo. El "libro de las crónicas de los reyes de Israel" (14:19; 15:7) parece haber registrado las actividades políticas de cada rey y se conservó en los archivos oficiales del Estado. La tercera fuente, el "libro de las crónicas de los reyes de Judá" (14:29; 15:7), también era un registro oficial del Estado conservado en los archivos reales.</p>',
                'f_redaccion' => '~587 AC',
            'fecha_redaccion_why' => '<p>La gramática y el estilo del hebreo y el contenido de los libros de los Reyes indican que esta obra se terminó durante el cautiverio babilónico. Reyes se completó después del 561 a.C., ya que ésta es la fecha del último acontecimiento registrado (2 R. 25:27-30). Dado que no se menciona a Ciro y su edicto liberador del 539 a.C., probablemente Reyes se completó antes de esta última fecha.
</p><p>
Primera de Reyes abarca los 120 años que van desde el comienzo del reinado de Salomón, en el 971 a.C., hasta el reinado de Ocozías, que finaliza en el 851 a.C. La fecha clave es el 931 a.C., el año en que el reino se dividió en la nación del norte, Israel, y la del sur, Judá.</p>',
                'descripcion' => '',
                'introduccion' => '<p>La primera mitad de 1 Reyes narra la vida del hijo y sucesor de David, Salomón. Bajo su liderazgo, Israel alcanzó la cima de su tamaño y gloria. Los grandes logros de Salomón, incluido el insuperable esplendor del templo que construyó en Jerusalén, le proporcionaron fama y respeto en todo el mundo. Sin embargo, el celo de Salomón por Dios disminuyó en sus últimos años, ya que las esposas paganas apartaron su corazón de la adoración sincera a Dios. Como resultado, el rey con el corazón dividido deja tras de sí un reino dividido, y 1 Reyes traza entonces las historias gemelas de dos grupos de reyes y dos naciones de personas desobedientes.
</p><p>
Al igual que los libros de Samuel, 1 y 2 Reyes eran originalmente un solo libro. La división en dos libros se hizo primero en la traducción griega del Antiguo Testamento (la Septuaginta) y luego en la Vulgata latina, y las traducciones inglesas han seguido el ejemplo.</p>',
            'temas_estructura' => '<p>El libro de 1 Reyes se divide claramente en dos secciones principales: el reino unido bajo Salomón (caps. 1-11), y el reino dividido (caps. 12-22).
</p><p>
Primeros Reyes ofrece una evaluación de orientación profética de las causas espirituales y morales que condujeron a la desaparición política y económica de los dos reinos. El material es demasiado selectivo para ser considerado una biografía de los reyes. Por ejemplo, Omri fue uno de los gobernantes más importantes del reino del norte desde el punto de vista político, pero debido a su corrupción moral, sus logros se descartan en apenas ocho versículos (16:21-28). Las vidas de estos reyes se utilizan para enseñar que la fidelidad a la alianza y la observancia de la ley de Dios producen bendición, pero la apostasía es recompensada con el juicio divino.
</p><p>
La primera mitad de 1 Reyes trata del esplendor de la época salomónica. Salomón tipifica a Cristo de varias maneras. Su legendaria sabiduría apunta a "Cristo Jesús, que se convirtió para nosotros en sabiduría de Dios" (1 Cor. 1:30). La fama, la gloria, la riqueza y el honor de Salomón prefiguran a Cristo en su reino. El gobierno de Salomón trae conocimiento, paz y adoración. Sin embargo, a pesar del esplendor de Salomón, el Hijo del Hombre dirá más tarde sobre su venida: "Ciertamente hay uno más grande que Salomón" (Mateo 12:42).
</p><p>
En los libros de los Reyes se hace mucho hincapié en los ministerios proféticos de Elías y Eliseo, que sirvieron de enlace entre el período anterior y la época de los profetas escritores.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/1-kgs/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Estudio y análisis del libro de 2 Reyes',
                'description' => 'Explora las historias de fidelidad y fracaso de los reyes de Israel y Judá, destacando los llamados proféticos al arrepentimiento y la justicia.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '2 Reyes',
                'abreviatura' => '2 Rey.',
                'abreviatura_online' => '2-kgs',
                'num_capitulos' => 25,
                'palabra_clave' => 'Cautividades del reino',
                'concepto_principal' => 'Destrucción de Jerusalén y del templo',
                'autor' => '¿Jeremías?',
                'autor_why' => '<p>Se desconoce el autor de 1 y 2 Reyes, aunque la tradición judía atribuye la obra al profeta Jeremías. Todo lo que se puede decir con certeza es que Reyes fue compilado a partir de varias fuentes y escrito desde una perspectiva profética.
</p><p>
El autor menciona tres fuentes primarias. El "libro de los hechos de Salomón" (11:41) parece haber contenido anales, datos biográficos y extractos de los archivos del templo. El "libro de las crónicas de los reyes de Israel" (14:19; 15:7) parece haber registrado las actividades políticas de cada rey y se conservó en los archivos oficiales del Estado. La tercera fuente, el "libro de las crónicas de los reyes de Judá" (14:29; 15:7), también era un registro oficial del Estado conservado en los archivos reales.</p>',
                'f_redaccion' => '~587 AC',
                'fecha_redaccion_why' => '<p>La composición de los libros de los Reyes se completó durante el cautiverio babilónico.
</p><p>
Los capítulos 1-17 abarcan los 131 años que van desde el 853 a.C. (el rey Ocozías de Israel) hasta el 722 a.C. (la caída de Samaria y el cautiverio asirio de Israel). Los capítulos 18-25 registran los 155 años que van desde el comienzo del reinado de Ezequías en el 715 a.C. hasta la liberación de Joaquín en Babilonia en el 560 a.C. El reino unido dura 112 años (1043-931 a.C.), el reino del norte de Israel existe durante otros 209 años (931-722 a.C.), y el reino del sur de Judá continúa durante otros 136 años (722-586 a.C.). Durante este período de 457 años de reino, hay grandes cambios de poder mundial. El poder egipcio y asirio sobre Palestina fluctúa; Asiria asciende a la preeminencia, declina y finalmente es conquistada por Babilonia.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Segundo Reyes continúa el drama iniciado en 1 Reyes: la trágica historia de dos naciones que chocan con el cautiverio. El autor recorre sistemáticamente los monarcas reinantes de Israel y Judá, primero llevando la historia de una nación hacia adelante, y luego recorriendo el mismo período para la otra.
</p><p>
Diecinueve reyes malvados consecutivos gobiernan en Israel, lo que lleva al cautiverio por parte de Asiria. El panorama es algo más brillante en Judá, donde ocasionalmente surgen reyes piadosos que reforman los males de sus predecesores. Al final, sin embargo, el pecado supera a la justicia y Judá es enviada a Babilonia.
</p><p>
Al igual que los libros de Samuel y Crónicas, 1 y 2 Reyes eran originalmente un solo libro. Las traducciones al inglés han seguido la división de los libros realizada por primera vez en las versiones griega y latina.</p>',
                'temas_estructura' => '<p>El segundo capítulo de los Reyes narra la historia del reino dividido en los capítulos 1-17 y la historia del reino superviviente de Judá en los capítulos 18-25. Al igual que en 1 Reyes, la narración es algo difícil de seguir, ya que el autor va y viene entre el reino del norte y el del sur.
</p><p>
El libro es algo más que una simple recopilación de los acontecimientos políticamente importantes o socialmente significativos de Israel y Judá. Más bien, 2 Reyes es una historia selectiva escrita con un propósito teológico. El autor selecciona y enfatiza las personas y los acontecimientos que son moral y religiosamente significativos, y enseña que la decadencia y el colapso de los dos reinos se produjeron porque los gobernantes y el pueblo no prestaron atención a las advertencias de los mensajeros de Dios. El clima espiritual de la nación determinó sus condiciones políticas y económicas. Ante todo, los libros de los Reyes son la historia del pacto escrita para explicar a los exiliados judíos las razones de la caída de los reinos del norte y del sur.
</p><p>
Segundo Reyes presenta a Dios como el controlador de la historia que revela su plan y propósito para su pueblo. Dios controla los asuntos humanos y los que obedecen al Señor disfrutan de su bendición, mientras que los desobedientes experimentan la disciplina de Dios. Sin embargo, ni siquiera la desobediencia de su pueblo puede frustrar los propósitos redentores de Dios. Contra todo pronóstico, la línea davídica de la promesa del pacto se mantiene (11:1-16), y el libro concluye con una nota esperanzadora y de futuro con la liberación del descendiente real de David, Joaquín, del cautiverio en Babilonia (25:27-30).
</p><p>
Los profetas de Yahvé desempeñan un papel destacado en 1 y 2 Reyes, ya que Dios los utiliza para recordar a los reyes sus responsabilidades en el pacto. Los ministerios de Elías y Eliseo en el reino del norte son los más destacados, pero también se mencionan muchos de los profetas que escribieron posteriormente. La certeza de la palabra profética de Dios se pone de relieve al mencionarse numerosos cumplimientos de profecías y milagros realizados por los profetas.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/2-kgs/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Estudio y análisis del libro de 1 Crónicas',
                'description' => 'Enfócate en la historia de David, desde su ascenso hasta la preparación para la construcción del Templo.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '1 Crónicas',
                'abreviatura' => '1 Cró.',
                'abreviatura_online' => '1-chr',
                'num_capitulos' => 29,
                'palabra_clave' => 'Visión sacerdotal del reino de David',
                'concepto_principal' => 'El Convenio de David',
                'autor' => 'Esdras',
            'autor_why' => '<p>Aunque el autor y la fecha no se indican en el texto, la tradición judía de que las Crónicas fueron escritas por Esdras puede ser correcta. Sin embargo, se acostumbra a hablar del autor simplemente como "el cronista". Algunos creen que Crónicas, Esdras y Nehemías tuvieron el mismo autor; los versos finales de Crónicas (2 Cr. 36:22, 23) se repiten en Esdras 1:1-3.</p>',
                'f_redaccion' => '~500 AC',
            'fecha_redaccion_why' => '<p>Las evidencias internas indican que las Crónicas fueron compuestas probablemente en algún momento del siglo V a.C. La mención de las seis generaciones que siguieron a Zorobabel (1 Cr. 3:17-21) y de las monedas persas conocidas como "dáricos" (1 Cr. 29:7) subrayan una fecha postexílica.
</p><p>
Los libros de las Crónicas abarcan un espacio de tiempo más amplio que cualquier otra obra de la Escritura. Las genealogías y la narración de 1 Crónicas abarcan el período desde Adán hasta el final de la vida de David. Las segundas Crónicas relatan la caída de la dinastía davídica desde Salomón hasta el Exilio.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Los libros de 1 y 2 Crónicas cubren el mismo período de la historia judía descrito en 2 Samuel hasta 2 Reyes, aunque desde una perspectiva diferente. Mientras que los libros de Reyes relatan la historia de Israel desde el punto de vista del cautiverio en Babilonia, Crónicas presenta la historia de los judíos desde el punto de vista postexílico de los que han regresado del cautiverio a la Tierra de la Promesa.
</p><p>
Al igual que los libros de Samuel y Reyes, 1 y 2 Crónicas eran originalmente una sola obra continua. Los traductores de la Septuaginta (Antiguo Testamento griego) separaron los dos libros. El nombre "Crónicas" procede de Jerónimo en su Biblia Vulgata latina (385-405 d. C.): Chronicorum Liber. Él entendía este título en el sentido de "Las crónicas de toda la historia sagrada".</p>',
            'temas_estructura' => '<p>Las Crónicas fueron escritas para el remanente que regresó y que estaba reconstruyendo Jerusalén después de los setenta años de cautiverio en Babilonia. Dado que los exiliados que regresaron eran originarios de Judá, la herencia e historia religiosa y nacional del reino del Sur (Judá) se presenta mostrando su conexión ininterrumpida con los inicios patriarcales.
</p><p>
Crónicas está escrito desde una perspectiva sacerdotal. El tema histórico principal se centra en el culto sacerdotal de Judá, desde la época de Saúl hasta el regreso de la nación judía a la tierra tras el decreto de Ciro (538 a.C.). Esta historia religiosa describe la fidelidad y las promesas de Dios a su pueblo, el poder de la Palabra de Dios y el papel central del culto en la vida del pueblo de Dios.
</p><p>
El templo de Jerusalén es el principal tema unificador de 1 y 2 Crónicas. Gran parte del material que se encuentra en Samuel y Reyes se omite en Crónicas porque no desarrolla este tema. Por ejemplo, los reyes del reino del norte se omiten por su rechazo al culto en el templo de Jerusalén, mientras que se da importancia a los reinados de los restauradores del templo de Judá (Asa, Josafat, Joás, Ezequías y Josías). El templo simboliza la presencia de Dios entre su pueblo y le recuerda su elevada vocación. Proporciona el vínculo espiritual entre su pasado y su futuro.
</p><p>
El linaje y la dinastía de David, destinatario de las promesas de la Alianza Davídica (1 Cr. 17:3-15), son importantes para Crónicas. Las genealogías de 1 Crónicas 1-9 ponen un énfasis desproporcionado en las tribus de Judá y Benjamín porque Crónicas no se ocupa del Reino del Norte sino del Reino del Sur y de la dinastía davídica. Demuestran el cumplimiento de las promesas del pacto de Dios al mantener la línea davídica a lo largo de los siglos. De acuerdo con el interés sacerdotal de Crónicas, también se presta especial atención a la tribu de Leví.
</p><p>
Todo el libro de 1 Crónicas, al igual que 2 Samuel, está dedicado a la vida de David. Comienza con la genealogía de la línea real de David (caps. 1-9) antes de repasar los acontecimientos clave del reinado de David (caps. 10-29).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/1-chr/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Estudio y análisis del libro de 2 Crónicas',
                'description' => 'Sigue desde el reinado de Salomón hasta el exilio babilónico, enfatizando la adoración en el Templo y las consecuencias de la desobediencia a Dios.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => '2 Crónicas',
                'abreviatura' => '2 Cró.',
                'abreviatura_online' => '2-chr',
                'num_capitulos' => 36,
                'palabra_clave' => 'Visión sacerdotal de Judá',
                'concepto_principal' => 'Reformas y arrepentimientos',
                'autor' => 'Esdras',
            'autor_why' => '<p>Aunque el autor y la fecha no se indican en el texto, la tradición judía de que las Crónicas fueron escritas por Esdras puede ser correcta. Sin embargo, se acostumbra a hablar del autor simplemente como "el cronista". Algunos creen que Crónicas, Esdras y Nehemías tuvieron el mismo autor; los versos finales de Crónicas (2 Cr. 36:22, 23) se repiten en Esdras 1:1-3.</p>',
                'f_redaccion' => '~500 AC',
            'fecha_redaccion_why' => '<p>Las evidencias internas indican que las Crónicas fueron compuestas probablemente en algún momento del siglo V a.C. La mención de las seis generaciones que siguieron a Zorobabel (1 Cr. 3:17-21) y de las monedas persas conocidas como "dáricos" (1 Cr. 29:7) subrayan una fecha postexílica.
</p><p>
Los libros de las Crónicas abarcan un espacio de tiempo más amplio que cualquier otra obra de la Escritura. Las genealogías y la narración de 1 Crónicas abarcan el período desde Adán hasta el final de la vida de David. Las segundas Crónicas relatan la caída de la dinastía davídica desde Salomón hasta el Exilio.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Los libros de 1 y 2 Crónicas cubren el mismo período de la historia judía descrito en 2 Samuel hasta 2 Reyes, aunque desde una perspectiva diferente. Mientras que los libros de Reyes relatan la historia de Israel desde el punto de vista del cautiverio en Babilonia, Crónicas presenta la historia de los judíos desde el punto de vista postexílico de los que han regresado del cautiverio a la Tierra de la Promesa.
</p><p>
Al igual que los libros de Samuel y Reyes, 1 y 2 Crónicas eran originalmente una sola obra continua. Los traductores de la Septuaginta (Antiguo Testamento griego) separaron los dos libros. El nombre "Crónicas" procede de Jerónimo en su Biblia Vulgata latina (385-405 d. C.): Chronicorum Liber. Él entendía este título en el sentido de "Las crónicas de toda la historia sagrada".</p>',
            'temas_estructura' => '<p>Las Crónicas fueron escritas para el remanente que regresó y que estaba reconstruyendo Jerusalén después de los setenta años de cautiverio en Babilonia. Dado que los exiliados que regresaron eran originarios de Judá, la herencia e historia religiosa y nacional del reino del Sur (Judá) se presenta mostrando su conexión ininterrumpida con los inicios patriarcales.
</p><p>
Crónicas está escrito desde una perspectiva sacerdotal. El tema histórico principal se centra en el culto sacerdotal de Judá, desde la época de Saúl hasta el regreso de la nación judía a la tierra tras el decreto de Ciro (538 a.C.). Esta historia religiosa describe la fidelidad y las promesas de Dios a su pueblo, el poder de la Palabra de Dios y el papel central del culto en la vida del pueblo de Dios.
</p><p>
El templo de Jerusalén es el principal tema unificador de 1 y 2 Crónicas. Gran parte del material que se encuentra en Samuel y Reyes se omite en Crónicas porque no desarrolla este tema. Por ejemplo, los reyes del reino del norte se omiten por su rechazo al culto en el templo de Jerusalén, mientras que se da importancia a los reinados de los restauradores del templo de Judá (Asa, Josafat, Joás, Ezequías y Josías). El templo simboliza la presencia de Dios entre su pueblo y le recuerda su elevada vocación. Proporciona el vínculo espiritual entre su pasado y su futuro.
</p><p>
El linaje y la dinastía de David, destinatario de las promesas de la Alianza Davídica (1 Cr. 17:3-15), son importantes para Crónicas. Las genealogías de 1 Crónicas 1-9 ponen un énfasis desproporcionado en las tribus de Judá y Benjamín porque Crónicas no se ocupa del Reino del Norte sino del Reino del Sur y de la dinastía davídica. Demuestran el cumplimiento de las promesas del pacto de Dios al mantener la línea davídica a lo largo de los siglos. De acuerdo con el interés sacerdotal de Crónicas, también se presta especial atención a la tribu de Leví.
</p><p>
Todo el libro de 1 Crónicas, al igual que 2 Samuel, está dedicado a la vida de David. Comienza con la genealogía de la línea real de David (caps. 1-9) antes de repasar los acontecimientos clave del reinado de David (caps. 10-29).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/2-chr/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Estudio y análisis del libro de Esdras',
                'description' => 'Explora el retorno de los exiliados a Jerusalén, liderados por Esdras, para reconstruir el Templo y restaurar la observancia de la Ley.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Esdras',
                'abreviatura' => 'Esd.',
                'abreviatura_online' => 'ezra',
                'num_capitulos' => 10,
                'palabra_clave' => 'Templo',
                'concepto_principal' => 'Dedicación del templo',
                'autor' => 'Esdras',
            'autor_why' => '<p>Aunque no se menciona específicamente a Esdras como autor, es sin duda el mejor candidato. La tradición judía (el Talmud) atribuye el libro a Esdras, y partes de la obra (7:28-9:15) están escritas en primera persona, desde el punto de vista de Esdras. Como en Crónicas, hay un fuerte énfasis sacerdotal, y Esdras era un descendiente sacerdotal directo de Aarón a través de Eleazar, Fineas y Sadoc (7:1-5).</p>',
                'f_redaccion' => '~500 AC',
            'fecha_redaccion_why' => '<p>Así como los israelitas fueron llevados al exilio en tres etapas sucesivas (605, 597, 586 a.C.), regresaron en tres etapas. La primera ocurrió bajo el liderazgo de Zorobabel (c. 538 a.C.). Tras un retraso considerable, este retorno dio lugar a la reconstrucción del templo (c. 520-516 a.C.), alentada por los profetas Hageo y Zacarías. Esdras dirigió el segundo retorno en el séptimo año de Artajerjes I (c. 458 a.C.). Nehemías dirigió el último retorno en el vigésimo año de Artajerjes I (c. 444 a.C.). Cronológicamente, los eventos del libro de Ester ocurren durante un período de diez a doce años (483-473 a.C.) entre el primer y el segundo retorno.
</p><p>
Esdras (si es que es el autor-compilador) probablemente escribió este libro entre el 457 a.C. (los acontecimientos de los capítulos 7-10) y el 444 a.C. (la llegada de Nehemías a Jerusalén). Durante el período cubierto por el libro de Esdras, Buda Gautama (c. 560-480 a.C.) estaba en la India, Confucio (551-479 a.C.) estaba en China, y Sócrates (470-399 a.C.) estaba en Grecia.</p>',
                'descripcion' => '',
            'introduccion' => '<p>Esdras continúa la narración del Antiguo Testamento de 2 Crónicas mostrando cómo Dios cumple su promesa de devolver a su pueblo a la Tierra de la Promesa tras setenta años de exilio. El "segundo éxodo" de Israel, este de Babilonia, es menos impresionante porque sólo un remanente decide salir de Babilonia. Esdras relata la historia de dos regresos de Babilonia: el primero dirigido por Zorobabel para reconstruir el templo (caps. 1-6), y el segundo bajo el liderazgo de Esdras para reconstruir la condición espiritual del pueblo (caps. 7-10).
</p><p>
Esdras y Nehemías fueron tratados como una unidad en el original hebreo y en la traducción griega conocida como la Septuaginta. En la traducción latina se separaron los dos, y las traducciones inglesas también los han tratado como obras separadas.</p>',
            'temas_estructura' => '<p>Esdras relata los dos primeros regresos de Babilonia, el primero dirigido por Zorobabel y el segundo dirigido décadas después por Esdras. Sus dos divisiones son la restauración del templo (caps. 1-6) y la reforma del pueblo (caps. 7-10).
</p><p>
El tema básico de Esdras es la restauración: la restauración del templo y la restauración espiritual, moral y social del remanente que regresó a Jerusalén bajo el liderazgo de Zorobabel y Esdras. Ambas se llevan a cabo a pesar de la oposición y las dificultades.
</p><p>
La restauración del templo y del pueblo requería una reafirmación de la identidad distintiva de Israel y de su fe, junto con la separación de otros pueblos y creencias paganas. Esta restauración tenía lugar en el contexto del imperio persa, en el que la tendencia religiosa dominante era la fusión de las creencias religiosas en una sola. Se animaba a los distintos pueblos del imperio a mantener sus culturas distintivas, pero sin exclusivismo religioso. En este entorno, los judíos experimentaron una enorme tentación de renunciar a todas sus pretensiones anteriores de tener una revelación exclusiva de Dios. Además, había una enorme tentación de renunciar a aquellos comportamientos que habían sido diseñados para separarlos de las culturas paganas circundantes. En este contexto, eran necesarios tanto el restablecimiento de un culto en el templo purificado de influencias religiosas paganas como la purificación del pueblo de los matrimonios mixtos con otros pueblos.
</p><p>
La fidelidad de Dios se ve en la forma en que protege soberanamente a su pueblo en medio de un poderoso imperio mientras están en cautiverio. Prosperan en su exilio, y Dios levanta reyes paganos que simpatizan con su causa y les animan a reconstruir su patria. Dios también proporciona líderes celosos y capaces que dirigen el regreso y la reconstrucción</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/ezra/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Estudio y análisis del libro de Nehemías',
                'description' => 'Descubre la reconstrucción de los muros de Jerusalén bajo Nehemías y sus esfuerzos por reformar a Israel y reafirmar el convenio con Dios.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Nehemías',
                'abreviatura' => 'Neh.',
                'abreviatura_online' => 'neh',
                'num_capitulos' => 13,
                'palabra_clave' => 'Murallas',
                'concepto_principal' => 'Renovación del convenio',
                'autor' => 'Esdras/Nehemías',
                'autor_why' => '<p>Debido a que Esdras y Nehemías fueron tratados como un solo libro en el texto hebreo, y porque los dos libros muestran ciertas similitudes en el estilo y la perspectiva, muchos estudiosos han creído que Esdras y Nehemías fueron compilados originalmente por la misma persona, probablemente Esdras. Es importante que en 1:1 se describa el contenido como "las palabras de Nehemías". Esta afirmación está respaldada por la narración de Nehemías en primera persona. Por lo tanto, si Esdras fue el compilador, aparentemente estaba citando directamente de los escritos de Nehemías.
</p><p>
Nehemías ocupó el muy responsable cargo de copero del rey Artajerjes. Evidentemente, esto era más parecido a ser un consejero personal que algo parecido a un mayordomo. El hecho de que el rey acabara nombrando a Nehemías gobernador de Judá da fe de su considerable capacidad administrativa. Con frecuencia el copero era también un eunuco, y esto puede explicar por qué no hay ninguna referencia a la familia de Nehemías.</p>',
                'f_redaccion' => '~500 AC',
                'fecha_redaccion_why' => '<p>Nehemías está estrechamente relacionado con el ministerio de su contemporáneo Esdras. Como sacerdote, Esdras ayudó a traer el renacimiento espiritual; Nehemías, como gobernador, ayudó a la reconstrucción física y política y dirigió al pueblo en la reforma moral. Juntos, formaron un equipo eficaz en la reconstrucción del remanente postexílico. Malaquías, el último profeta del Antiguo Testamento, también ministró durante este tiempo para proporcionar una dirección moral y espiritual adicional.
</p><p>
El libro de Nehemías se centra en los acontecimientos que rodean el tercer regreso del exilio, en el año 444 a.C. Nehemías fue dos veces gobernador de Judá. Su primer período como gobernador duró doce años (5:14), y terminó cuando regresó a Babilonia (13:6). Luego regresó a Jerusalén "después de ciertos días". Si el rey era todavía Artajerjes I, como parece probable, entonces el segundo gobierno de Nehemías comenzó antes del 424 a.C., cuando el rey murió. Por lo tanto, el libro de Nehemías fue escrito probablemente entre el 430 y el 420 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Nehemías, contemporáneo de Esdras y copero del rey en el palacio persa, encabezó el tercer y último regreso a Jerusalén tras el exilio babilónico. Concedido el permiso del rey persa para regresar a su patria, Nehemías desafió a sus compatriotas a reconstruir los destrozados muros de Jerusalén. A pesar de la oposición, la tarea se completó en sólo cincuenta y dos días. En cambio, la tarea de revivir y reformar al pueblo de Dios exigió años de vida piadosa y liderazgo de Nehemías.
</p><p>
El libro de Nehemías es un complemento del libro de Esdras. Proporciona información adicional sobre las reformas religiosas y sociales que tuvieron lugar en Judá y Jerusalén a mediados del siglo V a.C. El libro deriva su título actual del personaje principal, Nehemías, cuyo nombre aparece en 1:1. Originalmente unido al libro de Esdras en el texto hebreo, Nehemías fue tratado como un libro separado cuando las Escrituras fueron traducidas al latín.</p>',
            'temas_estructura' => '<p>El libro de Nehemías completa el relato histórico del pueblo de Dios en el Antiguo Testamento, unos cuatrocientos años antes del nacimiento del Mesías prometido. Sus dos divisiones son: la reconstrucción del muro (caps. 1-13), y la restauración del pueblo (caps. 8-13).
</p><p>
Mientras que Esdras se ocupa de la restauración religiosa de Judá, Nehemías se ocupa principalmente de la restauración política y geográfica de Judá. Se dedica gran atención a la reconstrucción de las murallas de Jerusalén, porque ésta era el centro espiritual y político de Judá. Sin murallas, Jerusalén apenas podía considerarse una ciudad.
</p><p>
En el libro de Nehemías, como en el resto del Antiguo Testamento, destaca el concepto de la alianza de Dios con su pueblo. El Antiguo Testamento trata la historia de Israel en términos de su fidelidad o desobediencia al pacto. Nehemías 9:1-10:39 registra una ceremonia de renovación del pacto en la que el pueblo se compromete a separarse de los gentiles en matrimonio y a obedecer los mandamientos de Dios.
</p><p>
La fidelidad de Dios hacia su pueblo se pone de manifiesto en la extensa narración de la reconstrucción de los muros. Esta reconstrucción se llevó a cabo a pesar de las considerables probabilidades en contra: estaba la cuestión de si el rey persa lo permitiría, así como la oposición concertada que enfrentaba Nehemías en Jerusalén por parte de los samaritanos y los amonitas. A pesar de las dificultades casi abrumadoras, la reconstrucción se completó en cincuenta y dos días, e incluso los enemigos de Nehemías reconocieron que el esfuerzo era obra de Dios (6:15-16).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/neh/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Estudio y análisis del libro de Ester',
                'description' => 'Conoce el valor de Ester, quien arriesgó su vida para salvar a los judíos en Persia de la exterminación, destacando la providencia divina.',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 2,
                'nombre' => 'Ester',
                'abreviatura' => 'Ester',
                'abreviatura_online' => 'esth',
                'num_capitulos' => 10,
                'palabra_clave' => 'Providencia',
                'concepto_principal' => 'Autonomía y conversión',
                'autor' => 'Incierto',
                'autor_why' => '<p>Aunque el texto de Ester no especifica la identidad del autor, su conocimiento de las costumbres persas, del palacio de Susa y de los detalles de los acontecimientos del reinado de Asuero indican que el autor vivió en Persia durante este periodo. El evidente nacionalismo judío y sus conocimientos sugieren además que el autor era judío. Se han sugerido Esdras y Nehemías como posibles autores, pero el estilo de Ester difiere notablemente del de Esdras y Nehemías y cualquier identificación precisa sigue siendo especulativa.</p>',
                'f_redaccion' => '~465 AC',
            'fecha_redaccion_why' => '<p>Los acontecimientos descritos en Ester ocurrieron entre el 483-473 a.C. y encajan entre los capítulos 6 y 7 de Esdras, entre el primer retorno dirigido por Zorobabel y el segundo dirigido por Esdras. El hecho de que el autor hable del rey Asuero en tiempo pasado (1:1) sugiere que el libro puede haber sido escrito durante el reinado de Artajerjes I (465-424 a.C.). Desde el punto de vista lingüístico, el libro puede datarse en la segunda mitad del siglo V o principios del IV a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>La mano de la providencia y la protección de Dios en favor de su pueblo es evidente a lo largo del libro de Ester, aunque el nombre de Dios no aparezca ni una sola vez en la obra. El complot de Amán para destruir a los judíos supone un grave peligro para el pueblo de Dios y es contrarrestado por la valentía de Ester y el consejo de su sabio primo Mardoqueo, dando como resultado una gran liberación. La fiesta judía de Purim se convierte en un recordatorio anual de la fidelidad de Dios en favor de su pueblo.</p>',
                'temas_estructura' => '<p>Históricamente, el libro de Ester desvela un segmento de la historia judía que tuvo lugar durante el cautiverio judío en Persia. Proporciona el único retrato bíblico de la gran mayoría de los judíos que eligieron permanecer en Persia en lugar de regresar a Palestina.
</p><p>
Aunque hay pocas razones para dudar de su carácter histórico, el libro de Ester es también una obra literaria muy bien elaborada, en la que el autor presenta con gran habilidad una complicada trama de peligro y liberación. El libro de Ester puede dividirse en dos secciones principales: la amenaza a los judíos (caps. 1-4) y el triunfo de los judíos (caps. 5-10).
</p><p>
Desde el punto de vista teológico, el tema de la protección providencial de Dios a su pueblo impregna este libro, aunque el nombre de Dios, o incluso la palabra "Dios", no se encuentra en el texto, lo que explica algunas de las objeciones posteriores a la canonicidad del libro. Aunque Dios disciplina a su pueblo, no lo abandona. El Dios de Israel es soberano sobre la historia y su providencia es evidente en cada página. Ester "casualmente" es elegida reina; su primo Mardoqueo "casualmente" frustra un complot de asesinato contra el rey; el rey "casualmente" lee la hazaña de Mardoqueo en el momento justo. El libro da a entender que nada de esto es accidental, que Dios tiene firmemente el control y está decidido a cumplir las promesas de su pacto con los hijos de Abraham.
</p><p>
La conducta del pueblo de Dios también es importante en Ester. Los problemas llegan a los judíos porque Mardoqueo no dará culto a nadie más que a Dios. No renunciará a su compromiso con Dios ni siquiera para salvarse a sí mismo y a su pueblo.
</p><p>
El tema de los banquetes es muy importante en Ester. Se mencionan un total de diez banquetes y los acontecimientos cruciales de la historia suelen ocurrir en los banquetes (por ejemplo, la desobediencia de Vasti, el intento de Ester de salvar a su pueblo, el desenmascaramiento y la condena de Amán). Este tema del banquete sirve para resaltar un propósito importante del libro: una explicación del origen de la fiesta judía de Purim (9:18-32).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/esth/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Estudio y análisis del libro de Job',
                'description' => 'Adéntrate en la historia de Job, su paciencia y fe durante pruebas extremas, y su diálogo con Dios sobre el sufrimiento y la justicia divina.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 3,
                'nombre' => 'Job',
                'abreviatura' => 'Job',
                'abreviatura_online' => 'job',
                'num_capitulos' => 42,
                'palabra_clave' => 'Soberanía',
                'concepto_principal' => 'Abandono de las dudas inútiles',
                'autor' => 'Incierto',
                'autor_why' => '<p>El texto del libro de Job no revela la identidad de su autor, pero el contenido del libro indica que su autor era un pensador profundo que trata algunos de los problemas más cruciales y difíciles de la existencia humana desde una perspectiva espiritual madura. El autor también era muy culto y estaba familiarizado con los motivos de la literatura sapiencial, la naturaleza y las culturas extranjeras.</p>',
                'f_redaccion' => 'Incierta',
            'fecha_redaccion_why' => '<p>La datación de Job implica dos cuestiones: la fecha de ambientación del libro y la fecha de su composición. Aunque no es posible determinar la fecha exacta de los acontecimientos descritos, varios factores abogan por una fecha patriarcal (2000-1800 a.C.): la ausencia de referencias a la historia israelita o a la ley bíblica; la larga vida de Job, de más de 100 años (42:16); el papel de Job como sacerdote de su familia, que estaba prohibido por la ley mosaica (1:5); y la medición de la riqueza de Job en términos de ganado (1:3).
</p><p>
Las sugerencias sobre la fecha de composición del libro van desde la época patriarcal hasta el período postexílico. La mayoría de los estudiosos actuales sitúan el libro entre las épocas salomónica y exílica, y algunos puntos de contacto entre Job e Isaías sugieren que pueden haber sido escritos más o menos al mismo tiempo.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Ambientado en la época de los patriarcas, el libro de Job narra la historia de un hombre que lo pierde todo -su riqueza, su familia y su salud- y se debate con la pregunta ¿por qué? El libro comienza con un debate celestial entre Dios y Satanás, pasa por tres ciclos de debates terrenales entre Job y sus amigos, y concluye con un dramático diagnóstico divino de los problemas de Job. Al final, Job reconoce la soberanía de Dios en su vida y recibe más de lo que tenía antes de sus pruebas.
</p><p>
El nombre "Job" aparece en textos del antiguo Oriente Próximo, identificando a un sabio legendario. Dado que no se da ninguna identificación genealógica de Job, algunos estudiosos creen que el autor está utilizando un personaje ficticio para hacer un punto teológico importante. Sin embargo, dado el patrón normal de la Biblia de basar la revelación en eventos históricos, tal idea es cuestionable.</p>',
            'temas_estructura' => '<p>El tema del libro de Job puede dividirse en tres partes: el dilema de Job (caps. 1-2), los debates de Job (caps. 3-37) y la liberación de Job (caps. 38-42). Además, la estructura literaria del libro de Job es simétrica. Entre una serie de debates poéticos (3:1-42:6), un prólogo en prosa (caps. 1-2) presenta a Job, revela la confianza de Dios en él y relata las tragedias que lo redujeron económica, física y emocionalmente. El epílogo (42:7-17) describe la restauración de Job, también en prosa, y equilibra el prólogo.
</p><p>
La pregunta básica del libro es: "¿Por qué sufren los justos si Dios es amoroso y omnipotente?". El sufrimiento en sí mismo no es el tema central; más bien, se centra en lo que Job aprende de su sufrimiento: la soberanía de Dios sobre toda la creación. El debate en los capítulos 3-37 se refiere a si Dios permitiría que los inocentes sufrieran. La respuesta de los tres amigos de Job -que hay una correlación directa entre la conducta justa y la salud/prosperidad- se muestra inadecuada. La afirmación de Elihú de que Dios puede utilizar el sufrimiento para purificar a los justos se acerca más a la realidad, pero sigue siendo incompleta. Por último, la conversación directa entre Dios y Job muestra que Dios es soberano y digno de adoración en todo lo que decida hacer. Job debe aprender a confiar en la bondad y el poder de Dios, incluso en la adversidad, ampliando su concepto de Dios.
</p><p>
Job reconoce a un redentor (19:25-27) y clama por un mediador (9:33; 25:4; 33:23). El libro plantea problemas e interrogantes que se responden perfectamente en Cristo, que se identifica con nuestros sufrimientos (Heb. 4:15). Cristo es la Vida, el Redentor, el Mediador y el Abogado del creyente.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/job/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Estudio y análisis del libro de Salmos',
                'description' => 'Explora una colección de himnos, oraciones y meditaciones que expresan la gama completa de emociones humanas ante la presencia divina.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 3,
                'nombre' => 'Salmos',
                'abreviatura' => 'Sal.',
                'abreviatura_online' => 'ps',
                'num_capitulos' => 150,
                'palabra_clave' => 'Adoración',
                'concepto_principal' => 'Adoración y alabanza',
                'autor' => 'David y otros',
                'autor_why' => '<p>Ningún otro libro de la Biblia tiene tantos autores diferentes como los Salmos. Setenta y tres salmos se atribuyen a David en las superscripciones, y otros dos, los Salmos 2 y 95, se atribuyen a David en el Nuevo Testamento. Además de los setenta y cinco de David, doce se atribuyen a Asaf, un sacerdote que dirigía el servicio de música. Diez son de los hijos de Coré, un gremio de cantores y compositores, y otros salmos se atribuyen a Salomón, Moisés, Hemán el ezraíta y Etán el ezraíta. Cincuenta de los salmos son anónimos, aunque algunos de ellos se atribuyen tradicionalmente a Esdras.</p>',
                'f_redaccion' => 'Incierta',
            'fecha_redaccion_why' => '<p>Los salmos eran originalmente poemas individuales. Con el paso del tiempo se recogieron en libros más pequeños y el libro de los Salmos en su forma actual comprende cinco de estos libros más pequeños. El salmo individual más antiguo es probablemente el de Moisés (Salmo 90); el último es probablemente el Salmo 137, que no pudo ser escrito antes del siglo VI a.C. Aunque muchos de los salmos fueron escritos y recopilados durante la era davídica, o poco después, la compilación final de los salmos no se completó probablemente hasta la segunda mitad del siglo V a.C., durante la época de Esdras y Nehemías (450-425 a.C.).</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de los Salmos es el más extenso y quizá el más utilizado de la Biblia. Explora toda la gama de experiencias humanas de una manera muy personal y práctica. Escrito a lo largo de un extenso período de la historia de Israel, la tremenda amplitud temática de los Salmos incluye temas como el júbilo, la guerra, la paz, la adoración, el juicio, la profecía mesiánica, la alabanza y el lamento. Los Salmos se interpretaban con el acompañamiento de instrumentos de cuerda y servían de himno del templo y de guía devocional para el pueblo judío.
</p><p>
El libro de los Salmos se fue recopilando y llegó a conocerse como el Sepher Tehillim ("Libro de las alabanzas"), porque casi todos los salmos contienen alguna nota de alabanza a Dios. La Septuaginta (Antiguo Testamento griego) utiliza el término griego Psalmoi como título para este libro, que significa poemas cantados con acompañamiento de instrumentos musicales, y esta palabra es la base de los términos ingleses "psalter" y "psalm".</p>',
                'temas_estructura' => '<p>El Salterio es en realidad cinco libros en uno, y cada libro termina con una doxología. Se han desarrollado diversos sistemas de clasificación de los tipos de salmos, sistemas que a menudo se basan en el contenido o la situación vital de cada uno de ellos. Se suele hablar de salmos de lamentación, salmos de acción de gracias, salmos de entronización, salmos de peregrinación, salmos reales, salmos de sabiduría y salmos imprecatorios.
</p><p>
La poesía de los Salmos es insuperable. La característica más evidente de la poesía hebrea es el paralelismo, la relación de una línea o verso con otro. Cuatro de los tipos más importantes de paralelismo hebreo son: (1) el paralelismo sinónimo, en el que el segundo verso de una copla repite la idea del primer verso (p. ej., 3:1; 24:1); (2) el paralelismo antitético, en el que el pensamiento del segundo verso se contrapone al del primero (p. ej, 1:6; 90:6); (3) paralelismo sintético, en el que la segunda línea es un desarrollo posterior del pensamiento iniciado en la primera línea (por ejemplo, 1:1; 19:7); (4) y paralelismo emblemático, en el que la segunda línea ilustra el pensamiento de la primera línea, a menudo mediante un símil (por ejemplo, 42:1). Nueve salmos son alfabéticos o acrósticos (Salmos 9, 10, 25, 34, 37, 111, 112, 119, 145). En los salmos acrósticos, cada línea o grupo de líneas sucesivas comienza con las letras sucesivas del alfabeto hebreo. El ejemplo clásico de un poema acróstico es el Salmo 119, en el que cada uno de los ocho versos de una determinada estrofa comienza con la misma letra.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/ps/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Estudio y análisis del libro de Proverbios',
                'description' => 'Descubre sabiduría práctica para la vida cotidiana, ofreciendo consejos sobre justicia, integridad y temor reverente a Dios.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 3,
                'nombre' => 'Proverbios',
                'abreviatura' => 'Prov.',
                'abreviatura_online' => 'prov',
                'num_capitulos' => 31,
                'palabra_clave' => 'Sabiduría',
                'concepto_principal' => 'La exaltación de la mujer',
                'autor' => 'Salomón',
            'autor_why' => '<p>El nombre de Salomón aparece al principio de las tres secciones que escribió: capítulos 1-9; 10:1-22:16; capítulos 25-29. Según 1 Reyes 4:32, Salomón pronunció tres mil proverbios, de los cuales unos 800 están incluidos en Proverbios. Es probable que Salomón recopilara y editara proverbios distintos a los suyos (Ecl. 12:9).
</p><p>
Proverbios 22:17-24:34 consiste en "las palabras de los sabios" (22:17; 24:23). Algunos de estos dichos son bastante similares a los que se encuentran en La sabiduría de Amenemope, un documento de enseñanzas sobre la administración pública de un egipcio que probablemente vivió entre el 1000 y el 600 a.C. Es posible que las tradiciones de sabiduría egipcias tomaran prestados ciertos aforismos de la literatura hebrea. Además, los Proverbios incluyen oráculos de personajes desconocidos llamados Agur el hijo de Jakeh (30:1) y el rey Lemuel (31:1).</p>',
                'f_redaccion' => '~931 AC',
                'fecha_redaccion_why' => '<p>Los proverbios de Salomón fueron escritos antes del año 931 a.C., y los proverbios de los capítulos 25-29 fueron recogidos por Ezequías unos 230 años después. Por lo tanto, algunas partes del libro se completaron no antes de la época del reinado de Ezequías y una fecha razonable para su finalización es en algún momento del siglo V a.C.
</p><p>
Esta literatura sapiencial no era exclusiva de Israel, y se encuentra en otros países del antiguo Oriente Próximo. En Egipto, se pueden encontrar ejemplos escritos ya en el año 2700 a.C. Aunque el estilo era similar a la literatura sapiencial de Israel, los proverbios y dichos de estos países diferían de los de Israel en cuanto al contenido porque carecían del carácter de las normas justas del Señor.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Proverbios proporciona las instrucciones detalladas de Dios para que su pueblo se enfrente con éxito a los asuntos prácticos de la vida cotidiana: cómo relacionarse con Dios, los padres, los hijos, los vecinos y el gobierno. Salomón, el autor principal, utiliza una combinación de poesía, parábolas, preguntas concisas, historias cortas y sabias máximas para dar en forma sorprendentemente memorable el sentido común y la perspectiva divina necesarios para manejar los desafíos de la vida.
</p><p>
Dado que Salomón, el prototipo de sabio de Israel, fue el principal colaborador, el título hebreo del libro es Mishle Shelomoh ("Parábolas de Salomón"). El título inglés del libro deriva del Liber Proverbiorum latino, o "Libro de los Proverbios".</p>',
            'temas_estructura' => '<p>El libro de los Proverbios puede dividirse en seis segmentos: el propósito de los Proverbios (1:1-7), los proverbios a los jóvenes (1:8-9:18), los proverbios de Salomón (10:1-24:34), los proverbios de Salomón copiados por los hombres de Ezequías (25:1-29:27), las palabras de Agur (30:1-33) y las palabras del rey Lemuel (31:1-31).

Proverbios es uno de los pocos libros bíblicos que explica claramente su propósito: impartir discernimiento moral y discreción (1:3-5), y desarrollar la claridad mental y la percepción (1:2, 6). La "sabiduría" de la que habla Proverbios es literalmente "habilidad" para vivir. La sabiduría es más que astucia o inteligencia. En cambio, se relaciona con la rectitud práctica y la perspicacia moral. Proverbios trata de la habilidad más fundamental de todas: la rectitud práctica ante Dios en todos los ámbitos de la vida.

Típicos de los proverbios del antiguo Oriente Próximo, muchos de ellos parecen haber surgido en el contexto del hogar. El término "hijo" aparece en cuarenta y cuatro versos del libro, "padre" en quince y "madre" en once. Se exhorta a los esposos a unirse con alegría en una unión claramente monógama (a pesar de la poligamia que se practicaba en la época, especialmente por parte de Salomón). A ambos padres se les indica que compartan la formación de los hijos y que los eduquen en la fe. Los pecados que atentan contra el orden del hogar se exponen sin tapujos.

Muchos proverbios presentan un contraste entre la sabiduría y la locura. La sabiduría es preferible a la insensatez por su origen divino y sus ricos beneficios. Hay distintas clases de necios, desde los ingenuos y poco comprometidos hasta los burlones que desprecian con arrogancia el camino de Dios. El necio no es deficiente mentalmente, pero parece autosuficiente y ordena la vida como si no existiera Dios.
</p><p>
En el capítulo 8 de Proverbios, la sabiduría se personifica y se ve en su perfección. Es divina (8:22-31), es la fuente de la vida biológica y espiritual (8:35, 36), es justa y moral (8:8, 9), y está disponible para todos los que la reciban (8:1-6, 32-35). Esta sabiduría se encarnó en Cristo "en quien están escondidos todos los tesoros de la sabiduría y del conocimiento" (Col. 2:3; cf. 1 Cor. 1:30).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/prov/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Estudio y análisis del libro de Eclesiastés',
                'description' => 'Sumérgete en reflexiones sobre el sentido de la vida y la vanidad de los esfuerzos humanos, subrayando la importancia de temer a Dios.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 3,
                'nombre' => 'Eclesiastés',
                'abreviatura' => 'Ecle.',
                'abreviatura_online' => 'eccl',
                'num_capitulos' => 12,
                'palabra_clave' => 'Vanidad',
                'concepto_principal' => 'El entero deber del hombre',
                'autor' => 'Salomón',
            'autor_why' => '<p>Debido a las palabras iniciales del libro ("Las palabras del Predicador, hijo de David, rey en Jerusalén"), el Eclesiastés se ha atribuido tradicionalmente a Salomón, que se cree que lo escribió en su vejez. El tono pesimista que impregna el libro estaría en consonancia con el estado espiritual de Salomón en aquella época (véase 1 R. 11). Sin embargo, muchos estudiosos fechan el libro en un periodo posterior por el carácter del hebreo (que parece ser del periodo exílico o postexílico) y por el problema teológico que supone que un Salomón apóstata escriba la Sagrada Escritura. Si Salomón no compuso la obra, puede haber tenido su origen en la época de Esdras (c. 450 a.C.).</p>',
                'f_redaccion' => '~931 AC',
            'fecha_redaccion_why' => '<p>La cuestión de la fecha del Eclesiastés está ligada a la identidad del autor (véase más arriba).</p>',
                'descripcion' => '',
                'introduccion' => '<p>El Eclesiastés es un libro profundo y problemático. Registra una intensa búsqueda de sentido y satisfacción en la vida en esta tierra, sobre todo ante toda la injusticia y los aparentes absurdos que nos rodean.
</p><p>
El nombre "Eclesiastés" deriva de la palabra griega ekklesia ("asamblea") y significa "el que se dirige a una asamblea". Este término griego traduce el título hebreo <i>Qoheleth</i>, que a menudo se traduce como "Predicador" o "Maestro" en español.</p>',
            'temas_estructura' => '<p>El carácter literario del Eclesiastés es complejo. Parece ser una colección de varios tipos de literatura, todos con el mismo objetivo general. Hay dichos sabios (proverbios), así como secciones que son reflexivas y meditativas. Más de un tercio del libro es poesía, pero también se incluyen pasajes narrativos.
</p><p>
El Eclesiastés es extremadamente difícil de sintetizar y esquematizar, y se han propuesto varios enfoques alternativos. Aquí se adopta un esquema en tres partes: (1) la tesis de que todo es vanidad (1:1-11), (2) la prueba de que todo es vanidad (1:12-6:12), y (3) el consejo para vivir con la vanidad (7:1-12:14).
</p><p>
El propósito del Eclesiastés es demostrar la tesis: "Todo es vanidad" (1:2). Esto contrasta con el libro de los Proverbios, en el que una confianza optimista supone que la vida es fundamentalmente lógica y coherente, y que las decisiones sabias producen buenos resultados y las insensatas, malos. El Eclesiastés reconoce que a menudo no es así. Aquí el Eclesiastés no se limita a contradecir a Proverbios, sino que lo complementa con una perspectiva diferente pero igualmente necesaria. Hay misterios inexplicables en la vida que desafían las soluciones fáciles. A pesar de las preguntas sin respuesta, lo mejor es temer a Dios, cumplir sus mandamientos y disfrutar así de la vida (3:12; 12:13).
</p><p>
Al dejar sin resolver ciertos problemas difíciles, el Eclesiastés plantea profundas preguntas sobre el sentido y la coherencia de la vida, preguntas que sólo pueden responderse en última instancia en Jesucristo, ya que sólo Cristo puede proporcionar la satisfacción, la alegría y la sabiduría definitivas.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/eccl/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Estudio y análisis del libro de Cantares',
                'description' => 'Adéntrate en poemas que celebran el amor y la belleza de la intimidad humana, simbolizando a menudo el amor entre Dios y su pueblo.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 3,
                'nombre' => 'Cantares',
                'abreviatura' => 'Cant.',
                'abreviatura_online' => 'song',
                'num_capitulos' => 8,
                'palabra_clave' => 'Amor matrimonial',
                'concepto_principal' => '-',
                'autor' => 'Salomón',
            'autor_why' => '<p>El libro se atribuye tradicionalmente a Salomón, aunque algunos rechazan la autoría salomónica y consideran que la frase "que es de Salomón" es una dedicatoria más que una designación de autoría. Si Salomón es el autor, este libro constituye uno de los 1.005 cantos que se sabe que compuso (1 Re. 4:32).</p>',
                'f_redaccion' => '~965 AC',
            'fecha_redaccion_why' => '<p>La autoría salomónica exige una fecha del siglo X a.C. La tradición judía considera que el libro es producto de los primeros años de Salomón (cf. 6:8), antes de su excesiva multiplicación de esposas y concubinas debido a la conveniencia política y la indulgencia sensual. Los que rechazan la autoría salomónica fechan el libro en el periodo postexílico, sosteniendo que ciertas construcciones gramaticales hebreas sugieren una fecha de origen relativamente tardía.
</p><p>
Independientemente de su fecha exacta de composición, el Cantar de los Cantares refleja el escenario de la época de Salomón, y la gloria del periodo salomónico es esencial para el simbolismo de la obra.</p>',
                'descripcion' => '',
            'introduccion' => '<p>El Cantar de los Cantares es una canción de amor llena de metáforas e imágenes orientales. Describe el cortejo y la boda de una pastora por parte del rey Salomón, así como las alegrías y los sinsabores del amor conyugal. El libro está organizado como las escenas de un drama con tres oradores principales: la novia, el rey y un coro (las hijas de Jerusalén).
</p><p>
Basándose en su primer verso, este libro se conoce con los títulos de "Cantar de los Cantares" y "Cantar de Salomón". En latín el libro se llama Cánticos, que significa "canciones".</p>',
                'temas_estructura' => '<p>Al igual que el Eclesiastés, este pequeño libro no es fácil de esquematizar, y se pueden utilizar varios esquemas. Abunda en cambios bruscos de oradores, y no se identifican. El comienzo del amor se ve en 1:1-5:1, y la ampliación del amor se encuentra en 5:2-8:14.
</p><p>
El Cantar de los Cantares es un tipo de literatura sapiencial semítica, y es paralela al libro de los Proverbios en varios aspectos. Al igual que la mayor parte de la poesía hebrea, el libro se caracteriza por el paralelismo, es decir, la afirmación y reafirmación de una idea en un contexto cercano. Las imágenes clave del libro son el vino, el jardín, el beso, varias especias y frutas, el campo o las metáforas pastorales. Cabe destacar que el nombre de Dios no aparece directamente en el libro.
</p><p>
La forma literaria y la intención del Cantar de los Cantares se han entendido de diversas maneras que se reducen a tres enfoques básicos.
<ul><li><b>La visión alegórica</b> entiende el libro como un poema que describe la relación entre Dios e Israel o entre Cristo y la iglesia. Cada detalle se considera un símbolo de una verdad espiritual más profunda. </li><li><b>El punto de vista tipológico</b> difiere del alegórico al reconocer el fundamento histórico y al encontrar la analogía no en todos los detalles subordinados, sino sólo en los esquemas principales. Los defensores de este punto de vista reconocen el amor mutuo entre Salomón y la Sulamita, pero van más allá y consideran que la analogía divina con su significado más elevado y espiritual es lo más importante. </li><li><b>El punto de vista literal</b> toma el contenido de la canción al pie de la letra. Algunos de los que lo interpretan así sostienen que el poema es simplemente una canción de amor secular que expresa el amor romántico humano en su mejor momento, sin lección espiritual ni contenido teológico, pero una interpretación literal no tiene por qué significar que el libro no tenga ilustraciones o aplicaciones espirituales.
</p><p>
El poema también puede entenderse como la representación de la relación amorosa ideal en el matrimonio y, por tanto, la presentación de una teología divina del matrimonio expresada en el amor entre marido y mujer en el ámbito físico.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/song/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Estudio y análisis del libro de Isaías',
                'description' => 'Descubre visiones de esperanza y restauración, junto con llamados al arrepentimiento y profecías sobre el Mesías y el futuro glorioso.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 4,
                'nombre' => 'Isaías',
                'abreviatura' => 'Isa.',
                'abreviatura_online' => 'isa',
                'num_capitulos' => 66,
                'palabra_clave' => 'La salvación es del Señor',
                'concepto_principal' => 'La expiación del Mesías',
                'autor' => 'Isaías',
            'autor_why' => '<p>Se nombra a Isaías, hijo de Amoz, como autor (1:1), y ni siquiera se alude a ningún otro escritor. La unidad de Isaías ha sido cuestionada en la época moderna por estudiosos que atribuyen gran parte de los capítulos 1-39 al propio profeta Isaías, pero atribuyen los capítulos 40-55 (llamados "Deutero-Isaías") a un profeta desconocido de Babilonia, y los capítulos 56-66 (llamados "Trito-Isaías") a otro profeta desconocido de Palestina (c. 460-445 a.C.). Aquí se argumenta que las diferencias estilísticas, históricas y teológicas significativas distinguen los capítulos 1-39 de los capítulos 40-66, y que los capítulos 40-66 deben dividirse además en dos secciones que reflejan un entorno exílico babilónico y un entorno postexílico palestino, respectivamente.
</p><p>
Aunque los argumentos en contra de la unidad de Isaías han sido impresionantes para algunos, también se pueden esgrimir sólidos argumentos a favor de la unidad literaria del libro. Aunque existen algunas diferencias entre las secciones, las similitudes estilísticas en todo el libro son mayores que las supuestas diferencias. Entre ellas se encuentran las similitudes en los pensamientos, las imágenes, los ornamentos retóricos, las expresiones características y el colorido local. Es cierto que la primera sección es más escueta y racional, mientras que la segunda es más fluida y emotiva, pero gran parte de ello se debe a la diferente temática: la diferencia entre la condena y la consolación.
</p><p>
Partes del libro se atribuyen a un periodo posterior a Isaías, hijo de Amoz, porque se piensa que el profeta no pudo predecir el exilio babilónico y el retorno bajo Ciro. Este argumento se basa, sin embargo, en la suposición dogmática de que la profecía predictiva es imposible. Tal teoría no puede explicar la presencia de profecías mesiánicas que se cumplieron en la vida de Cristo. A fin de cuentas, la idea de un único autor plantea menos dificultades que las teorías de autoría múltiple.
</p><p>
Con razón, pues, se ha mantenido tradicionalmente que Isaías, hijo de Amoz, que profetizó en Jerusalén durante los reinados de Uzías, Jotam, Acaz y Ezequías, es el autor del libro que lleva su nombre. El profeta pertenecía evidentemente a una distinguida familia judía, y su educación es evidente en su impresionante vocabulario y estilo. Al parecer, Isaías mantuvo un estrecho contacto con la corte real, pero sus exhortaciones contra las alianzas con potencias extranjeras no siempre fueron bien recibidas. Su esposa era profetisa y tuvo al menos dos hijos (7:3; 8:3). Isaías pasó la mayor parte de su tiempo en Jerusalén, y la tradición judía dice que sus perseguidores lo cortaron en dos durante el reinado del malvado rey Manasés (cf. Heb. 11:37).</p>',
                'f_redaccion' => '~740 AC',
            'fecha_redaccion_why' => '<p>El largo ministerio de Isaías abarcó desde el 740 al 680 a.C. aproximadamente (1:1), y el libro de Isaías contiene sin duda escritos proféticos redactados a lo largo de este periodo. Comenzó su ministerio cerca del final del reinado de Uzías (790-739 a.C.) y continuó durante los reinados de Jotam (739-731 a.C.), Acaz (731-715 a.C.) y Ezequías (715-686 a.C.). Isaías sobrevivió a Ezequías por unos pocos años, ya que en 37:38 se registra la muerte de Senaquerib en 681 a.C. Ezequías fue sucedido en 686 a.C. por su malvado hijo Manasés, que derrocó el culto a Yahvé y sin duda se opuso a la obra de Isaías.
</p><p>
En la época de Isaías, el poder de Asiria crecía bajo el mando de Tiglat-Pileser, que se volvió hacia el oeste después de sus conquistas en el este, arrancando muchas de las naciones más pequeñas a lo largo del Mediterráneo, incluido el Reino del Norte de Israel (722-21 a.C.). Como contemporáneo de Oseas y Miqueas, Isaías profetizó durante los últimos años del Reino del Norte, pero ministró al Reino del Sur, que seguía los pecados de su vecino del norte. Después de la caída de Samaria y del Reino del Norte, advirtió a Judá del juicio no de Asiria, la amenaza más inmediata, sino de Babilonia.</p>',
                'descripcion' => '',
                'introduccion' => '<p>A menudo se ha llamado a Isaías "el príncipe de los profetas" por la majestuosidad de su libro y la fuerza con que describe los temas de la justicia y la redención, que culminan en las grandes profecías del Mesías y la era mesiánica. En este sentido, Isaías es como una Biblia en miniatura. Los primeros treinta y nueve capítulos están llenos de juicios sobre los pueblos inmorales e idólatras, tanto de Judá como de las naciones circundantes. Pero los últimos veintisiete capítulos declaran un mensaje de esperanza y consuelo.
</p><p>
El nombre Isaías, del hebreo <i>yeshaiah</i>, significa "Yahvé es la salvación", término que resume acertadamente el contenido del libro.</p>',
            'temas_estructura' => '<p>El libro de Isaías tiene tres secciones principales: profecías de condena (caps. 1-35), un paréntesis o interludio histórico (caps. 36-39), y profecías de consuelo y consolación (caps. 40-66).
</p><p>
El mensaje de Isaías se presenta con el trasfondo del mayor período de prosperidad de Israel después de la "Edad de Oro" bajo David y Salomón. La prosperidad, el éxito agrícola y comercial y el éxito militar fueron acompañados por la inmoralidad, el exceso de bebida, la idolatría, la opresión de los pobres, la avaricia y la presencia de falsos profetas que complacían los deseos del pueblo. En respuesta a esta situación, Isaías destacó (1) la salvación por la fe (7:9; 28:16; 30:15), (2) la santidad de Dios y la necesidad de una vida ética (6:1-8; 37:23), (3) la ofensa del pecado humano y la certeza del juicio divino (caps. 1-35), y (4) la seguridad de la redención para un remanente arrepentido (1:9, 19; 10:19-22; 46:3, 4; 65:8-10).
</p><p>
El tema básico de este libro se encuentra en el nombre de Isaías, que significa "La salvación es del Señor". La palabra "salvación" aparece veintiséis veces en Isaías, pero sólo siete veces en todos los demás profetas juntos.
</p><p>
De todos los libros del Antiguo Testamento, sólo los Salmos contienen un mayor número de profecías mesiánicas que Isaías. Isaías expone todos los aspectos de la gloria y el ministerio de Cristo: Su encarnación (7:14; 9:6); Su juventud (7:15; 11:1; 53:2); Su carácter apacible (42:2); Su obediencia (50:5); Su mensaje (61:1, 2); Sus milagros (35:5, 6); Sus sufrimientos, rechazo y muerte vicaria (50:6; 53:1-12); y Su exaltación (52:13).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/isa/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Estudio y análisis del libro de Jeremías',
                'description' => 'Sigue los llamados al arrepentimiento y las advertencias de consecuencias por la infidelidad, en medio de promesas de restauración y un nuevo pacto.






',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 4,
                'nombre' => 'Jeremías',
                'abreviatura' => 'Jer.',
                'abreviatura_online' => 'jer',
                'num_capitulos' => 52,
                'palabra_clave' => 'La última hora de Judá',
                'concepto_principal' => 'Promesa de un nuevo convenio',
                'autor' => 'Jeremías / Baruc',
            'autor_why' => '<p>El libro afirma claramente que Jeremías es su autor (1:1). Dictó todas sus profecías a su secretario Baruc desde el comienzo de su ministerio hasta el cuarto año de Joaquín, y las secciones posteriores también fueron compuestas. Sólo el capítulo 52, un suplemento casi idéntico al de 2 Reyes 24:18-25:30, no fue evidentemente escrito por Jeremías.
</p><p>
Jeremías era hijo del sacerdote Hilcías y vivía a unos tres kilómetros al norte de Jerusalén, en la ciudad de Anatot. Como lección para Judá, no se le permitió casarse (16:2). Debido a su inoportuno mensaje sobre el juicio divino que se produciría a través de la invasión babilónica, fue amenazado y encarcelado. El profeta sobrevivió al asalto babilónico a la ciudad y posteriormente fue llevado a Egipto, donde murió.</p>',
                'f_redaccion' => '~585 AC',
            'fecha_redaccion_why' => '<p>Según 36:1-3, la redacción de partes de Jeremías puede fecharse con cierta precisión en el cuarto año de Joaquín (605 a.C.), cuando Jeremías recibió la orden de Dios de escribir los mensajes proféticos que había entregado al pueblo durante los veinte años anteriores. Este material parece corresponder a los capítulos 1-20. Los capítulos restantes contienen profecías y relatos históricos en orden temático y no cronológico, y abarcan los segundos veinte o veinticinco años del ministerio de Jeremías.
</p><p>
Jeremías fue contemporáneo de Sofonías, Habacuc, Daniel y Ezequiel, y su ministerio se extendió desde c. 627 hasta c. 580 a.C. Hubo tres etapas en el ministerio de Jeremías. Del 627 al 605 a.C. profetizó mientras Judá estaba amenazada por Asiria y Egipto. Del 605 al 586 a.C. proclamó el juicio de Dios mientras Judá estaba amenazado y asediado por Babilonia. Del 586 al 580 a.C. ministró en Jerusalén y Egipto después de la caída de Judá.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de Jeremías es la profecía de un hombre llamado divinamente en su juventud desde la ciudad sacerdotal de Anatot. Jeremías, un profeta desconsolado con un mensaje desgarrador, trabaja durante más de cuarenta años proclamando un mensaje de perdición al pueblo de Judá, de cuello duro. Despreciado y perseguido por sus compatriotas, Jeremías baña sus duras profecías con lágrimas de compasión. Su corazón roto le hace escribir un libro roto, que es difícil de ordenar cronológica o temáticamente. Pero a través de sus sermones y signos declara fielmente que la entrega a la voluntad de Dios es el único camino para evitar la calamidad.</p>',
            'temas_estructura' => '<p>Aunque Jeremías no es fácil de ordenar cronológica o temáticamente, su mensaje básico es claro: el inevitable e ineludible juicio de Dios sobre Israel por su rebeldía y desobediencia. El libro puede dividirse en cuatro secciones principales: la llamada del profeta Jeremías (cap. 1), las profecías a Judá (2:1-45:5), las profecías a los gentiles (46:1-51:64) y la caída de Jerusalén (cap. 52).
</p><p>
Conocido a menudo como el "profeta llorón", Jeremías proclamó fielmente la condena divina de la rebelde Judá durante cuarenta años. Su simpatía y preocupación por su nación le hizo afligirse profundamente por la rebeldía y la inminente perdición de su pueblo.
</p><p>
A menudo Jeremías deseaba renunciar al oficio profético debido a la dureza de su mensaje y a la respuesta poco amistosa que suscitaba. A Jeremías le tocó la difícil tarea de enfrentarse a un pueblo que parecía volverse más locamente confiado a medida que crecía el peligro. Creían que Dios no dejaría caer a Jerusalén porque poseían el templo y la única religión verdadera. Jeremías tuvo que decirles que los términos del pacto de Dios ordenaban el castigo por la desobediencia.
</p><p>
La conocida sección sobre la nueva alianza (caps. 30-33) refleja el especial interés de Jeremías por la alianza. Todos los profetas basan sus acusaciones y llamamientos en la relación de alianza de Israel con Dios, pero Jeremías lo hace de forma mucho más explícita. No critica el contenido de la antigua alianza, sino que reconoce que hay que interiorizarla para poder vivirla. Por eso profetiza la llegada de una nueva alianza, que estará escrita en el corazón del pueblo de Dios (31:31-34).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/jer/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Estudio y análisis del libro de Lamentaciones',
                'description' => 'Reflexiona sobre el dolor y la desolación tras la caída de Jerusalén, en un profundo lamento que busca consuelo en la misericordia de Dios.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 4,
                'nombre' => 'Lamentaciones',
                'abreviatura' => 'Lam.',
                'abreviatura_online' => 'lam',
                'num_capitulos' => 5,
                'palabra_clave' => 'Lamentaciones',
                'concepto_principal' => 'Fe en la misericordia de Dios',
                'autor' => 'Jeremías',
            'autor_why' => '<p>Tradicionalmente, este libro se ha atribuido al profeta Jeremías, aunque no se le nombra en el texto. La traducción griega del Antiguo Testamento (la Septuaginta) nombra a Jeremías como autor, y los primeros padres de la Iglesia, como Orígenes y Jerónimo, estaban de acuerdo. Su ubicación actual después del libro de Jeremías en el texto español refleja este juicio. Las similitudes estilísticas entre los dos libros también indican que es muy posible que Jeremías fuera el autor.</p>',
                'f_redaccion' => '~587 AC',
                'fecha_redaccion_why' => '<p>El tono vívido y apasionado del autor da una fuerte impresión de alguien que acababa de experimentar los horrores de la destrucción de la Ciudad Santa y el templo. Este hecho sugiere una fecha de composición poco después del 586 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Lamentaciones describe el funeral de una ciudad. Es un retrato con lágrimas de la antaño orgullosa Jerusalén, ahora reducida a escombros por las hordas invasoras de Babilonia. En un canto fúnebre de cinco poemas, el autor expresa la profunda emoción de quien ha visto la matanza de muchos de los suyos, la esclavitud de otros y la abyecta desesperación de los pocos supervivientes.</p>',
                'temas_estructura' => '<p>Los cinco capítulos de las Lamentaciones constan de cinco poemas luctuosos que pueden titularse:
<ol><li> la destrucción de Jerusalén, </li><li> la cólera de Yahvé, </li><li> la oración por la misericordia, </li><li> el asedio de Jerusalén, </li><li> la oración por la restauración.</li></ol>
</p><p>
Cada uno de los cinco poemas constituye un capítulo, y los cuatro primeros tienen una estructura acróstica, una forma literaria que sigue el patrón del alfabeto: el primer verso o grupo de versos comienza con la primera letra del alfabeto, el segundo con la segunda, y así sucesivamente. Por supuesto, esta estructura es casi imposible de reproducir en la traducción.
</p><p>
Los cuatro primeros capítulos (poemas) son cantos de difuntos, cargados de dolor y agonía, salvo dos breves estallidos de fe y esperanza en 3:19-42 y 3:55-60. El capítulo 5 no es tan intenso, pero incluso allí está presente el latido de un profundo dolor. A lo largo de los poemas, se perciben las percepciones teológicas típicas de Jeremías. A menudo se repiten los contrastes agudos y las comparaciones vívidas, y el lenguaje figurado es abundante.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/lam/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Estudio y análisis del libro de Ezequiel',
                'description' => 'Explora visiones proféticas sobre la gloria de Dios, juicio a las naciones y la promesa de restauración y renovación para Israel.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 4,
                'nombre' => 'Ezequiel',
                'abreviatura' => 'Ezeq.',
                'abreviatura_online' => 'ezek',
                'num_capitulos' => 48,
                'palabra_clave' => 'La futura restauración de Israel',
                'concepto_principal' => 'El valle de los huesos secos',
                'autor' => 'Ezequiel',
                'autor_why' => '<p>Los tres primeros versículos nombran a Ezequiel, hijo de Buzi, como receptor de las visiones de Dios registradas en los capítulos 1-3. A partir de ahí, el libro continúa en primera persona, refiriéndose sin duda al mismo profeta Ezequiel. La unidad de estilo, las frases peculiares de Ezequiel, pero frecuentes en este libro, y la atención constante a sus grandes temas han convencido a la mayoría de los estudiosos de que el libro es el resultado de los encuentros de Ezequiel con Dios.
</p><p>
Al igual que Jeremías, Ezequiel era un sacerdote llamado a ser profeta del Señor. Su esposa murió como señal para los judíos exiliados de que Jerusalén no sería perdonada (24:16-24). Su ministerio profético muestra un énfasis sacerdotal en su preocupación por el templo, el sacerdocio, los sacrificios y la Shekinah (la gloria de Dios manifestada en el templo). Ezequiel tuvo el privilegio de recibir una serie de visiones impactantes y fue cuidadoso y artístico en su presentación.</p>',
                'f_redaccion' => '~573 AC',
            'fecha_redaccion_why' => '<p>Ezequiel fue llevado al exilio en Babilonia después de que la ciudad cayera por segunda vez en manos de Nabucodonosor en el año 597 a.C. Su primera visión debe fecharse probablemente en el año 593-92 a.C. y la última fecha dada para un oráculo es probablemente 571-70 a.C., lo que hace que su ministerio dure unos veinte años. El libro, tal y como lo tenemos ahora, probablemente se completó poco después. El año treinta (1:1) es probablemente la edad de Ezequiel cuando recibió su llamada, la edad en que los sacerdotes entraban de lleno en sus deberes en el templo. Como el exilio había privado a Ezequiel del privilegio de servir como sacerdote del templo, Dios le concedió graciosamente el ministerio profético registrado en este libro.
</p><p>
Este libro es el más fácil de fechar de los libros del Antiguo Testamento, debido a la singular secuencia ordenada de fechas de Ezequiel. Cada sección de oráculos proféticos comienza con el año y el día del mes. El profeta Ezequiel fue contemporáneo de Jeremías y Daniel, y algunas de sus profecías parecen ser extensiones del mensaje de Jeremías. Daniel se menciona tres veces en el libro (14:14, 20; 28:3).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Escrito por un exiliado llevado a Babilonia antes del asalto final a Jerusalén, Ezequiel utiliza profecías, parábolas, signos y símbolos para dramatizar el mensaje de Dios a su pueblo exiliado. Aunque son como huesos secos al sol, Dios los volverá a reunir y dará vida a la nación una vez más. Al juicio presente le seguirá la gloria futura.
</p><p>
El nombre hebreo transliterado "Ezequiel" significa "Dios fortalece" o "Fortalecido por Dios". El nombre aparece dos veces en este libro y en ninguna otra parte del Antiguo Testamento.</p>',
            'temas_estructura' => '<p>El libro de Ezequiel puede dividirse en cuatro secciones: la llamada y el encargo de Ezequiel (caps. 1-3), el juicio sobre Judá (caps. 4-24), el juicio sobre los gentiles (caps. 25-32) y la restauración de Israel (caps. 33-48).
</p><p>
Al igual que los libros de Daniel y el Apocalipsis, Ezequiel pertenece al género de los escritos "apocalípticos". Las características de este tipo de literatura incluyen el uso de simbolismo, visiones, alegorías, parábolas y acciones simbólicas. Ezequiel utiliza muchas de estas vías de expresión para recalcar a sus compañeros exiliados que el juicio de Dios sobre Jerusalén aún no había terminado. La copa de la iniquidad de Jerusalén se estaba acabando; había llegado el momento de que Dios actuara. La certeza del juicio divino estaba simbolizada por la salida de la gloria de Dios del templo (8:1-11:25).
</p><p>
Ezequiel también subraya la certeza del juicio de Dios sobre las naciones que rodean a Israel. Muestra el círculo completo del juicio sobre las naciones que rodean a Judá siguiéndolas en un circuito en el sentido de las agujas del reloj: Amón, Moab, Edom, Filistea, Tiro y Sidón (caps. 25-28). Los oráculos contra las naciones concluyen con Egipto, una nación que seguiría existiendo pero que nunca recuperaría su antigua gloria (29:15).
</p><p>
Con la caída de Jerusalén, la atención de Ezequiel se dirige a la futura restauración de Israel. La visión del valle de los huesos secos (37:1-14) ilustra vívidamente la reanimación de la nación por el Espíritu de Dios. La restauración de Israel se desarrolla aún más cuando Ezequiel regresa en una visión a la ciudad caída y recibe especificaciones detalladas para la reconstrucción del templo, la ciudad y la tierra (caps. 40-48). Tras una intrincada descripción del nuevo atrio exterior, el atrio interior y el templo (caps. 40-42), Ezequiel ve el regreso de la gloria del Señor al templo desde el este (43:1-12).
</p><p>
Las visiones escatológicas de Ezequiel sobre la restauración de Israel tienen claramente una dimensión mesiánica. El título "hijo del hombre" aparece unas noventa veces en Ezequiel y, aunque el título se aplica aquí al propio Ezequiel, fue apropiado por Jesús como su autodesignación favorita. Por lo tanto, Ezequiel puede ser considerado como un tipo de Cristo. Como tal, Ezequiel recibió el poder de ser una voz profética de la era mesiánica cuando el "Espíritu de Yahveh cayó" sobre él (11:5). El descenso del Espíritu Santo sobre Jesús en el río Jordán le facultó para proclamar el advenimiento del reino mesiánico (Lucas 4:18, 19). Además, la visión del Señor Dios como el Pastor divino que reúne a su rebaño disperso (34:11-16) evoca imágenes de Jesús como el Buen Pastor (Juan 10:11-16). El santuario restaurado en medio de un pueblo reunido cuya cabeza es el Rey-sacerdote, el Mesías davídico (37:22-28), prefigura el tabernáculo restaurado de David, la iglesia (Amós 9:11; Hechos 15:16).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/ezek/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Estudio y análisis del libro de Daniel',
                'description' => 'Descubre relatos de fe y profecías durante el exilio en Babilonia, destacando la soberanía de Dios sobre los reinos de la tierra.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 4,
                'nombre' => 'Daniel',
                'abreviatura' => 'Dan.',
                'abreviatura_online' => 'dan',
                'num_capitulos' => 12,
                'palabra_clave' => 'El programa de Dios para Israel',
                'concepto_principal' => 'Profecía de las setenta semanas',
                'autor' => 'Daniel',
            'autor_why' => '<p>La autoría y la fecha de Daniel son dos de las cuestiones más controvertidas en el campo de los estudios bíblicos (véase Fecha, más adelante). Daniel afirmó haber escrito este libro (12:4), y utilizó la primera persona autobiográfica a partir de 7:2. El Talmud judío coincide con este testimonio, y Cristo atribuyó una cita de 9:27 al "profeta Daniel" (Mateo 24:15).
</p><p>
Daniel era un joven judío de noble cuna llevado a Babilonia en el primer cautiverio bajo Nabucodonosor en el 605 a.C. Se convirtió en miembro del servicio real babilónico al principio de su cautiverio y pasó la mayor parte de su carrera como consejero de alto rango de Nabucodonosor. Los sucesores de Nabucodonosor parecen haber dado menos importancia a Daniel, pero después de que Babilonia fuera conquistada por los persas, Daniel volvió a alcanzar una importancia considerable bajo el rey Darío.
</p><p>
Daniel es uno de los pocos personajes bíblicos conocidos sobre los que no se ha escrito nada negativo. Su vida se caracterizó por la fe, la oración, el valor, la coherencia y la falta de compromiso. Este hombre "muy querido" (9:23; 10:11, 19) fue mencionado tres veces por su contemporáneo Ezequiel, del siglo VI a.C., como ejemplo de rectitud.</p>',
                'f_redaccion' => '~536 AC',
                'fecha_redaccion_why' => '<p>Babilonia se rebeló contra el Imperio Asirio en el 626 a.C., derrocó la capital asiria de Nínive en el 612 a.C., y se hizo dueña del antiguo Cercano Oriente cuando derrotó a Egipto en la batalla de Carchemish en el 605 a.C. Más tarde, ese mismo año, el rey babilónico Nabucodonosor sometió a Jerusalén y se llevó como rehenes a Babilonia a destacados ciudadanos de la ciudad, entre los que se encontraba el joven Daniel.
</p><p>
Daniel ministró durante toda la duración del cautiverio babilónico como profeta y funcionario del gobierno, y continuó después de que Babilonia fuera vencida por los medos y los persas en el año 539 a.C. Su ministerio profético se dirigió a las cortes gentiles de Babilonia y Persia, así como a sus compatriotas judíos. Zorobabel dirigió el regreso de los judíos a Jerusalén en el primer año de Ciro, y Daniel vivió y ejerció su ministerio al menos hasta el tercer año de Ciro (536 a.C.; 10:1). Tomando las declaraciones del libro al pie de la letra, el libro de Daniel parecería haber sido escrito para el noveno año de Ciro (c. 530 a.C.).
</p><p>
Debido en gran parte a las extensas visiones de Daniel sobre los imperios que sucedieron al babilónico y a la convicción de que la profecía predictiva es imposible, muchos críticos han argumentado que Daniel es un libro fraudulento escrito en la época de los macabeos, en el siglo II a.C., y no en el siglo VI como afirma el libro. Sin embargo, hay razones de peso para aceptar la fecha del siglo VI.
</p><p>
El argumento de que la profecía predictiva es imposible y, por tanto, que la secuencia de imperios descrita en los capítulos 7 y 8 fue escrita durante el período de dominación griega del siglo II a.C., implica un rechazo dogmático de lo sobrenatural. Además, este argumento a favor de una fecha del siglo II supone que las cuatro naciones imperiales representadas son Babilonia, Media, Persia y Grecia. Sin embargo, es evidente que Daniel habla de un imperio combinado medo-persa (5:28), y que la descripción del cuarto imperio se ajusta a Roma, que alcanzó el dominio mucho después de la supuesta fecha de escritura del siglo II a.C., y no a Grecia.
</p><p>
Aunque se afirma que la parte aramea de Daniel (caps. 2-7) es arameo tardío, estudios recientes han demostrado que el arameo de Daniel es en realidad un ejemplo de arameo imperial temprano, una forma consistente con una fecha del siglo VI a.C. Además, la presencia de fragmentos del texto de Daniel entre los Rollos del Mar Muerto -fragmentos que aparentemente datan del período macabeo- no permite que una obra supuestamente escrita en el período macabeo haya sido ampliamente aceptada como Escritura.
</p><p>
Aunque algunos sostienen que hay errores históricos en Daniel, y que estos errores abogan por una fecha tardía, las pruebas recientes han demostrado la exactitud histórica de Daniel. Aunque siguen existiendo algunos interrogantes, ninguno plantea una dificultad insuperable para una fecha del siglo VI a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Tres de las historias más famosas de la Biblia están registradas en el libro de Daniel: Sadrac, Mesac y Abed-Nego en el horno de fuego, la escritura en la pared en la fiesta de Belsasar y Daniel en el foso de los leones. Sin embargo, más allá de estas historias, el libro es un misterio para muchos: registra sueños, visiones y sus interpretaciones, que son difíciles de entender. Sin embargo, el mensaje central del poder de Dios y su triunfo final es claro, y es tan relevante hoy como lo fue en la época de Daniel.
</p><p>
El nombre "Daniel" significa "Dios es mi juez", y el libro lleva el nombre del autor y personaje principal.</p>',
                'temas_estructura' => '<p>Daniel, el "Apocalipsis del Antiguo Testamento", presenta un sorprendente barrido de la historia profética. Después de un capítulo introductorio en hebreo, Daniel cambia al arameo en los capítulos 2-7 para describir el curso futuro de las potencias mundiales gentiles. Luego, en los capítulos 8-12, Daniel vuelve al hebreo para examinar el futuro de la nación judía bajo la dominación gentil.
</p><p>
El tema del control soberano de Dios en los asuntos de la historia del mundo emerge claramente y proporciona consuelo a la futura iglesia, así como a los judíos cuya nación fue destruida por los babilonios. Los babilonios, los persas, los griegos y los romanos irán y vendrán, pero Dios establecerá su reino a través de su pueblo redimido para siempre.
</p><p>
Otro tema de este libro es el énfasis en la separación a Dios, con Daniel como ejemplo máximo. Desde su decisión de no comer la comida del rey (1:8-16), hasta su negativa a orar al rey (6:4-24), Daniel mostró un espíritu tan intransigente que se abrieron oportunidades espectaculares para que Dios desplegara su poder en favor de Daniel.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/dan/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Estudio y análisis del libro de Oseas',
                'description' => 'Adéntrate en llamados al arrepentimiento de Israel, usando la metáfora del matrimonio para ilustrar la infidelidad del pueblo y el amor redentor de Dios.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Oseas',
                'abreviatura' => 'Oseas',
                'abreviatura_online' => 'hosea',
                'num_capitulos' => 14,
                'palabra_clave' => 'El amor leal de Dios para Israel',
                'concepto_principal' => 'Denunciación de la idolatría',
                'autor' => 'Oseas',
            'autor_why' => '<p>Aparte de su calamitoso matrimonio, poco se sabe de la vida del profeta Oseas. No se indica su lugar de nacimiento, pero su familiaridad y preocupación por el Reino del Norte indica que vivió en Israel, no en Judá. Era hijo de Beeri (1:1), esposo de Gomer (1:3) y padre de dos hijos y una hija (1:4, 6, 9).
</p><p>
Oseas sentía verdadera compasión por su pueblo, y su sufrimiento personal por el comportamiento de su esposa le hizo comprender el dolor de Dios por el pecado de Israel. Por eso, sus palabras sobre el juicio que se avecina son apasionadas, pero templadas con un corazón de ternura.</p>',
                'f_redaccion' => '~715 AC',
            'fecha_redaccion_why' => '<p>Evidentemente, Oseas compiló este libro durante los primeros años de Ezequías, y su ministerio se extendió desde aproximadamente el 755 a.C. hasta el 710 a.C. Cuando Oseas comenzó su ministerio, Jeroboam II (782-753 a.C.) aún reinaba en Israel. El ministerio de Oseas abarcó los reinados de los últimos seis reyes de Israel, desde Zacarías (753-752 a.C.) hasta Oseas (732-722 a.C.).
</p><p>
Cuando Oseas comenzó su ministerio, Israel estaba disfrutando de un período temporal de prosperidad política y económica bajo Jeroboam II. Sin embargo, la nación comenzó a desmoronarse después de que Tiglat-Pileser II (745-727 a.C.) fortaleciera a Asiria. Los reinados de los últimos seis reyes de Israel fueron relativamente breves, ya que cuatro fueron asesinados y un quinto fue llevado cautivo a Asiria. La confusión y la decadencia caracterizaron los últimos años del Reino del Norte, y su pueblo se negó a prestar atención a las advertencias de Oseas sobre un juicio inminente.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de Oseas fue escrito a un Reino del Norte de Israel al borde del desastre. Por fuera, la nación estaba disfrutando de una época de prosperidad y crecimiento; pero por dentro, la corrupción moral y el adulterio espiritual impregnaban la vida del pueblo. El profeta Oseas recibió instrucciones de Dios de casarse con una mujer infiel, y encontró en su propia vida una vívida ilustración de la infidelidad del pueblo de Dios y de la fidelidad de Dios. Oseas se hace eco repetidamente de su triple mensaje: Dios aborrece los pecados de su pueblo; el juicio es seguro; pero el amor de Dios se mantiene firme.
</p><p>
Oseas, cuyo nombre significa "Salvación", tiene el mismo nombre que el último rey de Israel, Oseas, aunque la Biblia inglesa los deletrea de forma diferente.</p>',
            'temas_estructura' => '<p>El libro de Oseas es una historia de amor y fidelidad unilateral que representa la relación entre Israel y Dios. Así como Gomer está casada con Oseas, Israel está desposado con Dios. Ambas relaciones se desintegran gradualmente: Gomer corre detrás de otros hombres, e Israel corre detrás de otros dioses. La idolatría espiritual de Israel se ilustra con el adulterio físico de Gomer. El desarrollo del libro puede trazarse en dos partes: la esposa adúltera y el marido fiel (caps. 1-3), y el Israel adúltero y el Señor fiel (caps. 4-14).
</p><p>
El mensaje de Oseas refleja la terrible fascinación de Israel por el culto a Baal. <i>Baal</i> significa "marido" o "señor", y su culto implicaba ritos de fertilidad que incluían la prostitución ritual. Baal era el  amante al que el infiel Israel acudía con frecuencia.
</p><p>
Oseas ofrece una de las expresiones más elocuentes del Antiguo Testamento sobre la misericordia de Dios. La palabra hebrea <i>hesed</i> se traduce como "misericordia", "bondad amorosa" o "amor firme". Implica la lealtad amorosa a los convenios con Dios, bien ilustrados por el convenio matrimonial. Pero desde la perspectiva de Oseas, el amor fiel de Dios no le permitiría divorciarse fácilmente de su pueblo.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/hosea/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Estudio y análisis del libro de Joel',
                'description' => 'Explora advertencias sobre el Día del Señor y promesas de restauración y derramamiento del Espíritu sobre toda la humanidad.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Joel',
                'abreviatura' => 'Joel',
                'abreviatura_online' => 'joel',
                'num_capitulos' => 3,
                'palabra_clave' => 'El grande y terrible día del Señor',
                'concepto_principal' => 'Reconciliación de Judá con Dios',
                'autor' => 'Joel',
            'autor_why' => '<p>Aunque hay varios otros Joel en la Biblia, el profeta Joel es conocido sólo por este libro. Joel se identifica como hijo de Petuel (1:1), y sus frecuentes referencias a Sión y a la casa del Señor sugieren que probablemente vivió cerca de Jerusalén. Debido a sus declaraciones sobre el sacerdocio en 1:13, 14; y 2:17, algunos piensan que Joel era sacerdote además de profeta. En cualquier caso, Joel fue un predicador claro, conciso e inflexible del arrepentimiento.</p>',
                'f_redaccion' => '~587 AC',
            'fecha_redaccion_why' => '<p>Dado que el libro no incluye referencias temporales explícitas, no se puede fechar con certeza. Tradicionalmente se ha fechado hacia el año 835 a.C., cuando Joás fue colocado en el trono a la edad de siete años y el sacerdote Joiada ejercía como verdadero gobernante (2 R. 11; 12). Este período parece encajar con el texto de Joel, ya que la influencia del sacerdocio parece ser fuerte y no se menciona a un rey. Debido a este protagonismo sacerdotal, otros sostienen que Joel debe fecharse mucho más tarde, en el período postexílico.
</p><p>
Las pruebas también apuntan a un intercambio de material entre Joel y Amós. Aunque algunos creen que Joel tomó prestado de Amós, es más probable que Amós, un profeta del siglo VIII, tomara prestado de Joel. Además, el estilo de Joel se parece más al de Oseas y Amós que al de los escritores postexílicos. Dado que Joel no menciona la idolatría, es posible que se escribiera después de la purga del culto a Baal a principios del reinado de Joás, bajo el sacerdote Joiada. Como profeta temprano en Judá, Joel habría sido contemporáneo de Eliseo en Israel.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El desastre golpeó al Reino del Sur de Judá en forma de una nube de langostas. En cuestión de horas, los campos quedaron desnudos, y el profeta Joel aprovechó esta oportunidad para proclamar el mensaje de Dios. La plaga de langostas se considera un presagio del próximo día del Señor. A la luz de esto, el libro advierte de la proximidad del juicio, llama a la gente al arrepentimiento y da al pueblo de Dios la esperanza del próximo día de salvación que seguirá al juicio.
</p><p>
El nombre hebreo Yo\'el significa "Yahvé es Dios", un nombre apropiado para un libro que enfatiza la obra soberana de Dios en la historia.</p>',
            'temas_estructura' => '<p>El libro de Joel se considera a menudo como la obra literaria más pulida entre los escritos proféticos. Su cuidadosa y bien desarrollada imaginería, especialmente al describir la plaga de langostas en los capítulos 1 y 2, y la clara estructura del libro apoyan esta afirmación. El libro de Joel puede dividirse en dos secciones principales: el día del Señor en retrospectiva (cap. 1) y el día del Señor en perspectiva (caps. 2 y 3).
</p><p>
Este breve libro desarrolla el tema crucial del día venidero del Señor (1:15; 2:1, 2, 11, 31; 3:14, 18): un tiempo de impresionante juicio sobre los pueblos y las naciones que se han rebelado contra Dios. Pero también es un tiempo de bendición futura para los que han confiado en Él. El tema del desastre está presente en todo el libro (plagas de langostas, hambrunas, incendios furiosos, ejércitos invasores, fenómenos celestes), pero las promesas de esperanza se intercalan con los pronunciamientos del juicio venidero.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/joel/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Estudio y análisis del libro de Amós',
                'description' => 'Conoce denuncias contra la injusticia social y la corrupción, y advertencias de juicio divino, enfatizando la necesidad de justicia y rectitud.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Amós',
                'abreviatura' => 'Amós',
                'abreviatura_online' => 'amos',
                'num_capitulos' => 9,
                'palabra_clave' => 'El juicio de Israel',
                'concepto_principal' => 'Cumplimiento de los convenios en Cristo',
                'autor' => 'Amós',
            'autor_why' => '<p>Amós no era un profeta "profesional" (7:14) como los más numerosos profetas institucionales o cultuales de su época. Desde su origen rústico en Tecoa, a seis millas al sur de Belén en el Reino del Sur de Judá, Amós fue llamado por Dios para ir al Reino del Norte y ser su portavoz (7:15).
</p><p>
El profeta era un hombre común cuya ocupación era el pastoreo de ovejas, con ingresos complementarios por el cuidado de los frutos del sicómoro (7:14). Su sensibilidad moral se vio afectada por las perversiones del culto de Israel que observó en Betel, uno de los grandes santuarios nacionales.</p>',
                'f_redaccion' => '~760 AC',
            'fecha_redaccion_why' => '<p>Según 1:1, Amós profetizó durante los reinados de Uzías, rey de Judá (767-739 a.C.), y de Jeroboam, rey de Israel (782-753 a.C.), lo que deja un posible marco temporal entre el 767 y el 753 a.C. La profecía de 7:9-11 parece indicar una época tardía del reinado de Jeroboam y una fecha probable de escritura es 760-753 a.C.
</p><p>
Amos ministró después de la época de Joel y Jonás, y justo antes de Oseas, Miqueas e Isaías. En esta época, Uzías reinaba sobre una Judá próspera y militarmente exitosa. En el norte, Israel era gobernado por el capaz rey Jeroboam II. Las circunstancias económicas y militares eran casi ideales, pero la prosperidad sólo aumentó el materialismo, la inmoralidad y la injusticia del pueblo. Durante estos años, Asiria, Babilonia, Siria y Egipto eran relativamente débiles. Así, al pueblo de Israel le resultaba difícil imaginar el desastre que se avecinaba, predicho por Amós, un desastre que ocurrió apenas tres décadas después.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de Amós aborda la búsqueda excesiva del lujo, la autoindulgencia y la opresión de los pobres que caracterizaron el período de prosperidad y éxito en el Reino del Norte de Israel bajo Jeroboam II. El mensaje de Amos sobre la fatalidad parecía incongruente con los elaborados adornos de esa época. Pero, con una perspicacia divina, vio la corrupción que se escondía bajo el brillante colorido exterior y anunció que la nación estaba podrida hasta la médula. El libro es un testimonio elocuente contra quienes subordinan la necesidad y la dignidad humanas a la búsqueda de la riqueza y el placer.
</p><p>
El nombre "Amos" deriva de los términos hebreos que significan "levantar una carga". Así, el nombre significa "Carga" o "Portador de carga". Amós estuvo a la altura del significado de su nombre al soportar la carga que le fue dada divinamente de declarar el juicio al Israel rebelde.</p>',
            'temas_estructura' => '<p>Aunque Amós subraya sus raíces rústicas y su falta de categoría profesional como profeta, el estilo vívido y el carácter literario del libro sugieren que fue educado. El libro de Amós puede dividirse convenientemente en cuatro secciones de ocho profecías (caps. 1; 2), tres sermones (caps. 3-6), cinco visiones (7:1-9:10) y cinco promesas (9:11-15).
</p><p>
El libro de Amós es básicamente un mensaje de juicio: profecías de juicio sobre las naciones, oráculos y visiones de juicio divino contra Israel. Amós comienza con una serie de acusaciones contra los siete vecinos de Israel, incluido Judá, y contra el propio Israel (caps. 1 y 2). Cada nación extranjera debe ser castigada por ofensas específicas, ya sea contra Israel o contra alguna otra nación. Este juicio sobre las naciones enseña que Dios es un monarca universal y que todas las naciones deben responder ante Él por su maltrato a otras naciones y pueblos.
</p><p>
La predicación de Amós subraya la rectitud y la justicia de Dios y su exigencia de que las relaciones humanas de su pueblo se caractericen también por la rectitud y la justicia. Los ricos son condenados por su opresión de los pobres y por su hipocresía religiosa. La religión es algo más que observar los días de fiesta y celebrar asambleas sagradas; la verdadera religión exige una vida recta, y la forma en que las personas tratan a sus vecinos revela su relación con Dios.
</p><p>
Amós termina el libro con una nota de consuelo. Tras el exilio y el juicio, Dios devolverá a su pueblo a la tierra y lo bendecirá.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/amos/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Estudio y análisis del libro de Abdías',
                'description' => 'Descubre la profecía de juicio contra Edom por su orgullo y hostilidad hacia Judá, subrayando la justicia divina y la restauración de Israel.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Abdías',
                'abreviatura' => 'Abd.',
                'abreviatura_online' => 'obad',
                'num_capitulos' => 1,
                'palabra_clave' => 'El juicio de Edom',
                'concepto_principal' => 'El castigo de Edom por su arrogancia',
                'autor' => 'Abdías',
                'autor_why' => '<p>Abdías fue un oscuro profeta que probablemente vivió en el Reino del Sur de Judá. No se sabe nada de su ciudad natal ni de su familia, pero es probable que no procediera de la línea real o sacerdotal porque su padre no se menciona en 1:1.
</p><p>
En el Antiguo Testamento se mencionan trece hombres con el nombre de Abdías, pero ninguno de ellos puede ser identificado con certeza como el autor de este libro.</p>',
                'f_redaccion' => '~587 AC',
            'fecha_redaccion_why' => '<p>Hay varias opiniones sobre la fecha del libro. La cooperación de Edom con los extranjeros en el saqueo de Jerusalén (vv. 10-14), que constituye el trasfondo histórico de la profecía, podría referirse a varios incidentes, de los cuales dos son los más probables. Puede haber ocurrido hacia el año 850 a.C., en el reinado de Joram (véase 2 Cr. 21:8-10, 16, 17), durante un período de revuelta de Edom, cuando Judá también estaba amenazado por los filisteos y los árabes invasores. También es posible una referencia a la complicidad edomita en la toma de Jerusalén por los babilonios en 586 a.C. Según el Salmo 137:7, los edomitas aplaudieron la destrucción de Jerusalén por Nabucodonosor. Los argumentos a favor de esta fecha posterior también se ven reforzados por el hecho de que Abdías parece citar Jeremías 49 (vv. 1-4 con Jer. 49:14-16; vv. 5, 6 con Jer. 49:9, 10; v. 8 con Jer. 49:7; y v. 16 con Jer. 49:12). Por lo tanto, las fechas posibles para la composición de Abdías son alrededor de 840 a.C., o entre la caída de Jerusalén en 586 a.C. y la caída de Babilonia en manos de Ciro en 539 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Con sólo veintiún versículos, Abdías es el libro más corto del Antiguo Testamento. Trata de la amarga rivalidad entre Edom, los descendientes de Esaú, hermano gemelo de Jacob, y el pueblo de Israel. Abdías, cuyo nombre significa "Adorador de Yahvé" o "Siervo de Yahvé", pronuncia una condena contra Edom y profetiza su destrucción total a causa de su persistente oposición al pueblo elegido por Dios.</p>',
            'temas_estructura' => '<p>Aunque es el más corto de los libros del Antiguo Testamento, Abdías lleva uno de los mensajes de juicio más fuertes. Debido a su larga historia de oposición al pueblo de Dios, el destino de Edom está sellado, y no hay posibilidad de liberación. Dios traerá la destrucción total sobre Edom, y no habrá ningún remanente. El libro de Abdías retrata el día de Edom en el tribunal divino, con su acusación, su sentencia y su condena. Este profeta de la justicia poética describe cómo el Juez de la tierra derribará el orgullo de Edom y restaurará la casa de Jacob. Las dos secciones de este breve libro son: el juicio de Edom (vv. 1-18) y la restauración de Israel (vv. 19-21).
</p><p>
El tema profético del día del Señor es prominente en los versículos 15-21. Como en la profecía de Joel, este día culminante trae tanto juicio como liberación. Para Edom, es un pronunciamiento de perdición (vv. 15, 16), pero para Judá traerá la liberación al experimentar la bendición y la restauración de su tierra (vv. 17-21).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/obad/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'Estudio y análisis del libro de Jonás',
                'description' => 'Descubre la historia de Jonás, enviado a predicar en Nínive, y su lucha con la compasión divina hacia personas que consideraba enemigas.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Jonás',
                'abreviatura' => 'Jonás',
                'abreviatura_online' => 'jonah',
                'num_capitulos' => 4,
                'palabra_clave' => 'La conversión gentil en Nínive',
                'concepto_principal' => 'Arrepentimiento de Nínive',
                'autor' => 'Jonás',
            'autor_why' => '<p>El libro de Jonás no tiene autor declarado, aunque la tradición lo atribuye a Jonás, un profeta del Reino del Norte durante el siglo VIII a.C. Es razonable suponer que el propio Jonás habría registrado las singulares experiencias descritas en el libro. Este hombre, cuyo nombre significa "paloma", era hijo de Amittai (1:1) y nativo de Gath Hepher (2 Kin. 14:25) en Zebulón, una ciudad a unos tres kilómetros al norte de Nazaret. Jonás se describe en términos que indican que es una persona real y que sus experiencias son reales e históricas.</p>',
                'f_redaccion' => '~760 AC',
            'fecha_redaccion_why' => '<p>Jonás fue un contemporáneo de Jeroboam II de Israel (782-753 a.C.) que ejerció su ministerio después de la época de Eliseo y justo antes de la de Amós y Oseas. Israel estaba disfrutando de un período de resurgimiento y prosperidad, y el fervor nacionalista era probablemente alto.
</p><p>
Asiria, una nación que había alcanzado una reputación casi legendaria por su crueldad, estaba en ligero declive durante estos años, pero seguía siendo una amenaza. El arrepentimiento de Nínive se produjo probablemente en el reinado de Asurdán III (773-755 a.C.). Dos plagas (765 y 759 a.C.) y un eclipse solar (763 a.C.) pueden haber preparado al pueblo para el mensaje de juicio de Jonás.
</p><p>
Aunque algunos han argumentado que el libro de Jonás se escribió en el período postexílico para contradecir el particularismo judío de Esdras, Nehemías y Malaquías, la enseñanza de que el plan de Dios incluye a los gentiles no es en absoluto exclusiva de Jonás en el Antiguo Testamento (Gn. 9:27; 12:3; Lv. 19:33; Is. 2:2; Joel 2:28-32), y otros argumentos a favor de una fecha postexílica no son persuasivos.</p>',
                'descripcion' => '',
                'introduccion' => '<p>La preocupación amorosa de Dios por los gentiles no es una verdad revelada sólo en el Nuevo Testamento. Más de siete siglos antes de Cristo, Dios encargó al profeta hebreo Jonás que proclamara un mensaje de arrepentimiento a la ciudad asiria de Nínive. Sin embargo, el nacionalismo judío cegó tanto al profeta como al pueblo de la alianza respecto a los propósitos mundiales de salvación de Dios. La historia de Jonás es una de las demostraciones más claras en las Escrituras del amor y la misericordia de Dios por todos los pueblos.</p>',
            'temas_estructura' => '<p>La interpretación del libro de Jonás está condicionada por el tipo de literatura que se considera. Bastantes estudiosos, al encontrar increíble la historia de Jonás siendo tragado por el gran pez, han considerado el libro como un ejemplo de mito, alegoría o parábola. Pero hay pocas razones para considerar el libro como algo que no sea histórico. Aparte del lamento del capítulo 2, el material se presenta en prosa directa, a diferencia de los relatos poéticos legendarios de la época. La Escritura presenta el relato como histórico y la aplicación de la experiencia de Jonás a la resurrección de Cristo (Mt. 12:39-41) exige que tomemos el relato con la máxima seriedad.
</p><p>
Desde el punto de vista literario, el libro de Jonás muestra una notable simetría estructural y se desarrolla mediante dos ciclos paralelos que llaman continuamente a la comparación. Además, el libro es rico en ironía: la desobediencia del profeta contrasta con la sorprendente fe de los marineros (cap. 1), y la mezquina preocupación de Jonás por la planta contrasta con el bondadoso cuidado y preocupación de Dios por el pueblo de la pagana Nínive (cap. 4).
</p><p>
El libro de Jonás puede dividirse en la primera comisión de Jonás (caps. 1 y 2) y la segunda comisión de Jonás (caps. 3 y 4).
</p><p>
Como ya se ha señalado, el tema dominante en Jonás es la extensión de la misericordia de Dios a las naciones gentiles, pero también son evidentes otros temas importantes. La soberanía de Dios sobre la vida, los elementos y las circunstancias se destaca claramente en las descripciones de la tormenta (1:4), el pez (1:17), la planta (4:6) y el gusano (4:7).
</p><p>
El libro de Jonás también sirvió para desafiar el orgullo nacionalista de Israel y su incapacidad para comprender la naturaleza de su tarea misionera y el propósito de Dios de otorgar su amorosa bondad a todos los pueblos. El cambio de actitud de Jonás es un símbolo del cambio que Dios exigía a todo Israel.
</p><p>
La experiencia de tres días de Jonás en el vientre del pez también sirve como tipo de la muerte, sepultura y resurrección de Cristo (Mateo 12:39-41). Aquí hay que señalar que el modismo hebreo, "tres días y tres noches", sólo requiere una parte del primer y tercer día.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/jonah/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'Estudio y análisis del libro de Miqueas',
                'description' => 'Explora llamados a la justicia social y profecías mesiánicas que prometen un gobernante de Belén y la futura paz y seguridad para el pueblo.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Miqueas',
                'abreviatura' => 'Miq.',
                'abreviatura_online' => 'micah',
                'num_capitulos' => 7,
                'palabra_clave' => 'El juicio y restauración de Judá',
                'concepto_principal' => 'El tribunal justo y misericordioso de Dios',
                'autor' => 'Miqueas',
            'autor_why' => '<p>El profeta Miqueas, cuyo nombre significa "¿Quién es como el Señor?", fue uno de los profetas del siglo VIII, junto con Oseas, Amós, Isaías y Jonás, y se le menciona en Jeremías 26:18. El hogar de Miqueas era Moresheth Gath (1:14), una ciudad probablemente situada a unas 20 millas al suroeste de Jerusalén.
</p><p>
Al igual que Amós, Miqueas era un hombre del campo que tenía tiempo para pensar y una visión clara. Bendecido con la pasión por la justicia de Amós y el corazón de amor de Oseas, el espíritu de Miqueas ardía de indignación por la forma en que los habitantes de la ciudad oprimían a los campesinos. Sin embargo, su enseñanza no es totalmente única; se hace eco de grandes verdades proclamadas por sus predecesores y contemporáneos, especialmente Isaías de Jerusalén.</p>',
                'f_redaccion' => '~687 AC',
            'fecha_redaccion_why' => '<p>El primer versículo indica que Miqueas profetizó en los días de Jotam (739-731 a.C.), Acaz (731-715 a.C.) y Ezequías (715-686 a.C.), reyes de Judá. Aunque Miqueas se ocupa principalmente de Judá, también se dirige al Reino del Norte de Israel y predice la caída de Samaria (1:6). Por lo tanto, gran parte de su ministerio tuvo lugar antes del cautiverio asirio de Israel en el 722 a.C. Sus fuertes denuncias de la idolatría y la inmoralidad también sugieren que su ministerio precedió en gran medida a las amplias reformas religiosas de Ezequías. Así pues, las profecías de Miqueas abarcaron desde el 735 al 710 a.C. aproximadamente.
</p><p>
Durante el ministerio de Miqueas, el reino de Israel siguió desmoronándose interior y exteriormente hasta su colapso en el 722 a.C. El imperio asirio alcanzó el cenit de su poder y se convirtió en una amenaza constante para Judá. Babilonia seguía bajo la dominación asiria, y la predicción de Miqueas de un futuro cautiverio babilónico para Judá (4:10) debió parecer improbable.</p>',
                'descripcion' => '',
            'introduccion' => '<p>Agobiado por el trato abusivo a los pobres, el libro de Miqueas reprende a todo aquel que se sirva del estatus social o del poder político para su beneficio personal. Un tercio de Miqueas expone los pecados de sus compatriotas, otro tercio describe el castigo que Dios está a punto de enviar, y el último tercio mantiene la esperanza de restauración una vez que la disciplina haya terminado. A través de todo ello, las justas exigencias de Dios a su pueblo son claras: "Hacer justicia, amar la misericordia y caminar humildemente con tu Dios" (6:8).</p>',
            'temas_estructura' => '<p>El libro de Miqueas es un poco difícil de analizar debido a su floja organización. Sin embargo, algunos temas importantes son claramente evidentes. La perdición de Samaria es segura y la de Judá no está muy lejos. El pueblo planea la maldad y oprime a los pobres sin preocuparse por el juicio divino sobre su comportamiento. También se destaca la corrupción de los líderes políticos y religiosos de Judá (cap. 3). Dios restaurará a su pueblo y le dará un verdadero gobernante que lo conducirá a la victoria, pero esa esperanza sólo está al otro lado del juicio que se avecina porque no aceptaron sus responsabilidades en el pacto como pueblo elegido por Dios.
</p><p>
El libro puede dividirse en tres secciones: la predicción del juicio (caps. 1-3), la predicción de la restauración (caps. 4 y 5), y la petición de arrepentimiento (caps. 6 y 7).
</p><p>
La predicción de Miqueas 5:2 de que el Mesías nacería en la ciudad de Belén es una de las más claras e importantes de todas las profecías mesiánicas del Antiguo Testamento. Además, Miqueas 2:12, 13; 4:1-8; y 5:4, 5 ofrecen vívidas descripciones del justo reinado de Cristo sobre todo el mundo.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/micah/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'Estudio y análisis del libro de Nahúm',
                'description' => 'Adéntrate en la profecía de Nahúm, que anuncia la caída de Nínive como justa retribución divina por su crueldad y maldad.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Nahúm',
                'abreviatura' => 'Nahúm',
                'abreviatura_online' => 'nahum',
                'num_capitulos' => 3,
                'palabra_clave' => 'El juicio de Nínive',
                'concepto_principal' => 'La caída de Asiria',
                'autor' => 'Nahum',
                'autor_why' => '<p>El nombre "Nahum" significa "consuelo" o "consolación", y su mensaje de condena para Nínive fue sin duda una fuente de consuelo para los habitantes de Judá que habían sufrido bajo la crueldad de los asirios.
</p><p>
Según 1:1, el profeta se llamaba "elcosita". Aunque se desconoce la ubicación exacta de Elkosh, muchos eruditos creen que Elkosh era una ciudad del sur de Judá (posteriormente llamada Elcesei) entre Jerusalén y Gaza. Esto convertiría a Nahum en un profeta del Reino del Sur y podría explicar su interés por el triunfo de Judá (1:15; 2:2).</p>',
                'f_redaccion' => '~612 AC',
            'fecha_redaccion_why' => '<p>Dado que el mensaje del libro es una predicción de la destrucción de Nínive, debe haber sido entregado en algún momento antes del 612 a.C., cuando la ciudad fue destruida por los babilonios. Está claro que fue escrito después del 663 a.C., año en que la capital de Egipto, Tebas (llamada "No Amón" en 3:8), fue capturada por Asiria. Puesto que Tebas recuperó su independencia en el 654 a.C., y Nahum no alude a ese acontecimiento, es posible que el libro se escribiera entre el 663 y el 654 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>A diferencia de su predecesor Jonás, cuyo ministerio dio lugar al arrepentimiento de los ninivitas, el profeta Nahum proclama la caída de la gran ciudad asiria de Nínive. Los ninivitas han olvidado su renacimiento y han vuelto a sus hábitos de violencia, idolatría y arrogancia. Como resultado, Babilonia destruirá la ciudad de tal manera que no quedará ni rastro de ella, una profecía que se cumple con doloroso detalle.</p>',
            'temas_estructura' => '<p>Nahum proclama con determinación la perdición de la capital asiria de Nínive. Entre los motivos de la condena de la ciudad están las inhumanidades del ejército asirio (2:12) y los vicios de la ciudad (3:4). La naturaleza de Dios, concretamente su ira, su santidad, su justicia y su poder, hace inevitable que sus enemigos perezcan (1:2-10).
</p><p>
El breve libro de Nahum puede dividirse en tres partes: la destrucción de Nínive decretada (cap. 1), la destrucción de Nínive descrita (cap. 2) y la destrucción de Nínive merecida (cap. 3).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/nahum/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'Estudio y análisis del libro de Habacuc',
                'description' => 'Explora el diálogo entre Habacuc y Dios sobre la justicia y la fe en medio de la opresión, culminando con una afirmación de confianza en Dios.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Habacuc',
                'abreviatura' => 'Hab.',
                'abreviatura_online' => 'hab',
                'num_capitulos' => 3,
                'palabra_clave' => 'El justo vivirá por su fe',
                'concepto_principal' => 'Del misterio a la certeza por la revelación',
                'autor' => 'Habacuc',
            'autor_why' => '<p>El autor de este libro es el profeta Habacuc, del que se sabe poco aparte de su nombre, que deriva de la palabra hebrea que significa "abrazo" o "abrazador". El hecho de que se le llame "profeta" (1:1; 3:1) puede sugerir que era miembro de un gremio profético profesional. Además, la referencia musical en la conclusión del libro indica que Habacuc puede haber sido un sacerdote relacionado con el culto del templo en Jerusalén.</p>',
                'f_redaccion' => '~600 AC',
            'fecha_redaccion_why' => '<p>Aunque el libro de Habacuc no incluye ninguna referencia al reinado de un rey, la evidencia interna indica una fecha entre la muerte del rey Josías (609 a.C.) y el comienzo del cautiverio babilónico (605 a.C.). Las únicas referencias temporales explícitas en Habacuc son a la invasión babilónica como un acontecimiento inminente (1:6; 2:1; 3:16). Las condiciones deplorables del pueblo (1:2-4) implican una fecha posterior a la muerte prematura de Josías en la batalla de Meguido (609 a.C.) y a principios del malvado reinado de Joaquín (609-597 a.C.).
</p><p>
Contemporáneo de Sofonías y Jeremías, Habacuc advirtió de la proximidad del juicio de Dios a través de los babilonios que se acercaban. Esta profecía se cumplió en el año 605 a.C., cuando Nabucodonosor deportó a Babilonia a diez mil ciudadanos destacados de Jerusalén.</p>',
                'descripcion' => '',
            'introduccion' => '<p>El profeta Habacuc ministró durante la agonía de la nación de Judá. A pesar de haber sido llamada repetidamente al arrepentimiento, la nación se negaba obstinadamente a cambiar sus caminos pecaminosos. Al preguntar cuánto tiempo duraría esta situación intolerable, Dios le dice a Habacuc que los babilonios serán su vara de castigo para la nación, un anuncio que hace que el profeta se arrodille. Aunque perplejo, Habacuc reconoce que el justo en cualquier generación vivirá por la fe (2:4), no por la vista, y concluye alabando la sabiduría de Dios aunque no entienda del todo sus caminos.</p>',
            'temas_estructura' => '<p>El libro de Habacuc puede dividirse convenientemente en dos partes: los problemas o la perplejidad de Habacuc (caps. 1 y 2), y la alabanza de Habacuc (cap. 3).
</p><p>
Al darse cuenta de la iniquidad de Israel y de la necesidad de castigo, Habacuc se queda perplejo ante el dilema moral de cómo un Dios santo puede emplear a los aún más malvados babilonios para castigar a sus hijos. La respuesta de Dios es doble: reafirma su naturaleza moral básica, que implica que todo el mundo debe enfrentarse finalmente al juicio por sus ofensas (2:2-20). Dios también le da a Habacuc una visión de su gloria infinita, una visión que recuerda en cierto modo a la de Job 38-41. Estas dos respuestas son suficientes para restablecer la fe de Habacuc en Dios.
</p><p>
Habacuc también subraya la libertad soberana de Dios como Dios para realizar sus buenos fines a su manera. A pesar de las apariencias, Dios sigue estando en el trono como Señor de la historia y gobernante de las naciones.
</p><p>
El libro de Habacuc describe la lucha del profeta por la fe, y al hacerlo se pone de relieve la centralidad de la fe en la vida del pueblo de Dios. Esta fe, que puede perdurar a pesar de las circunstancias externas desfavorables, alcanza una hermosa expresión en 3:16-19.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/hab/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Estudio y análisis del libro de Sofonías',
                'description' => 'Descubre advertencias sobre el Día del Señor y llamados al arrepentimiento, prometiendo restauración para los humildes y fieles.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Sofonías',
                'abreviatura' => 'Sof.',
                'abreviatura_online' => 'zeph',
                'num_capitulos' => 3,
                'palabra_clave' => 'El día del Señor',
                'concepto_principal' => 'Juicio y restauración',
                'autor' => 'Sofonías',
            'autor_why' => '<p>Normalmente, la genealogía de un profeta no se remonta más allá de su padre. Sin embargo, Sofonías se remonta a cuatro generaciones para demostrar su linaje real como tataranieto del rey Ezequías (1:1). Por lo tanto, era un pariente lejano del rey Josías y de aquellos a quienes dirige su profecía.
</p><p>
Al parecer, Sofonías vivió en la ciudad de Jerusalén, porque se refiere a ella como "este lugar" (1:4), y también describe la topografía con íntima familiaridad.</p>',
                'f_redaccion' => '~627 AC',
            'fecha_redaccion_why' => '<p>Sofonías fija la época de su profecía "en los días de Josías hijo de Amón, rey de Judá" (1:1). Josías reinó entre el 640 y el 609 a.C., y en 2:13 se indica que la destrucción de Nínive (612 a.C.) estaba todavía en el futuro. Por tanto, el libro de Sofonías puede fecharse entre el 640 y el 612 a.C.
</p><p>
Dado que las reformas religiosas de Josías comenzaron hacia el año 628 a.C., y que Sofonías cataloga listas de pecados que prevalecían antes de las reformas (1:3-13; 3:1-7), la época de Sofonías puede fecharse con mayor precisión entre el 635 y el 625 a.C. La contundente profecía de Sofonías puede incluso haber sido un factor en las reformas que tuvieron lugar.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El libro de Sofonías recalca repetidamente el mensaje de que el día del Señor, el día del juicio, se acerca cuando la malignidad del pecado será tratada. Israel y sus vecinos gentiles pronto experimentarán la mano aplastante de la ira de Dios. Pero una vez completado el proceso de castigo, llegará la bendición en la persona del Mesías.</p>',
            'temas_estructura' => '<p>En general, Sofonías es un libro feroz y sombrío de advertencia sobre el próximo día del Señor. La desolación, la oscuridad y la ruina golpearán a Judá y a las naciones a causa de la ira de Dios sobre el pecado. Sofonías pasa tres veces de lo general a lo específico: (1) del juicio universal al juicio sobre Judá (1:1-2:3); del juicio sobre las naciones circundantes al juicio sobre Jerusalén (2:4-3:7); y del juicio y limpieza de todas las naciones a la restauración de Israel (3:8-20). Las dos grandes divisiones del libro son el juicio en el día del Señor (1:1-3:8), y la salvación en el día del Señor (3:9-20).
</p><p>
Al igual que Amós, unos cien años antes, el tema del próximo día del Señor es fundamental para Sofonías. Este día del Señor tiene dos componentes: el juicio que resulta en la destrucción de Judá por ejércitos extranjeros, pero también la restauración y la esperanza para el pueblo de Dios. Sofonías ve este segundo aspecto del día del Señor como un acontecimiento terminal, que pone fin a la historia. Así, el mensaje comparte algunas características con la literatura apocalíptica que retrata el final de los tiempos.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/zeph/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'Estudio y análisis del libro de Hageo',
                'description' => 'Explora el llamado de Hageo a los exiliados para reconstruir el Templo, subrayando la promesa de Dios de bendiciones y gloria mayor que la anterior.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Hageo',
                'abreviatura' => 'Hageo',
                'abreviatura_online' => 'hag',
                'num_capitulos' => 2,
                'palabra_clave' => 'La reconstrucción del templo',
                'concepto_principal' => 'Tribulación antes de la venida del Mesías',
                'autor' => 'Hageo',
                'autor_why' => '<p>El profeta Hageo sólo se conoce por este libro y por dos referencias a él en Esdras 5:1 y 6:14. Allí se le ve trabajando junto al profeta más joven Zacarías en el ministerio de alentar la reconstrucción del templo.
</p><p>
Hageo regresó de Babilonia con Zorobabel y evidentemente vivió en Jerusalén. Algunos interpretan que 2:3 significa que nació en Judá antes de la destrucción del primer templo en el año 586 a.C. y que fue uno de los pocos que pudieron recordar el esplendor del antiguo templo. Esto significaría que Hageo tenía unos setenta y cinco años cuando profetizó en el 520 a.C. Sin embargo, es igualmente probable que haya nacido en Babilonia durante el cautiverio.</p>',
                'f_redaccion' => '520 AC',
                'fecha_redaccion_why' => '<p>En el 538 a.C., Ciro de Persia emitió un decreto que permitía a los judíos regresar a su tierra y reconstruir su templo, y en el 536 a.C. comenzaron las obras del templo. Los exiliados que regresaron se encontraron con una fuerte oposición de los samaritanos de la tierra, y las obras del templo se detuvieron en el año 534 a.C. Fue en este contexto que Dios llamó a sus profetas Hageo y Zacarías a la misma tarea de instar al pueblo a completar el templo.
</p><p>
Los cuatro sermones de Ageo están fechados con precisión en el año 520 a.C., el segundo año del reinado de Darío I (521-486 a.C.), rey de Persia. El primero fue pronunciado el primer día del mes hebreo de Elul (agosto-septiembre), el segundo el primer día de Tishri (septiembre-octubre) y los dos últimos el vigésimo cuarto día de Kislev (noviembre-diciembre). Más tarde, los mensajes se recopilaron en lo que hoy se conoce como el libro de Hageo.
</p><p>
Hageo, junto con Zacarías y Malaquías, se enfrentó a una situación diferente a la de los profetas pre-exílicos. Aquellos profetas anteriores se enfrentaron a un pueblo que tendía a depender de las ceremonias físicas y de los edificios más que de una verdadera relación con Dios marcada por la obediencia. Por el contrario, los profetas postexílicos ministraron a un pueblo desanimado y apático que estaba tentado a creer que nada de lo que hacían cambiaba desde el punto de vista religioso. La destrucción de Jerusalén había humillado a un pueblo antaño orgulloso y estaba influenciado por la visión persa de que todas las religiones tenían el mismo valor.
</p><p>
Como resultado, los judíos que regresaron vieron pocas razones para prestar atención a sus leyes y prácticas distintivas, y no sintieron la necesidad de preocuparse demasiado por la reconstrucción del templo. Por supuesto, los peligros de esta situación eran profundos. En poco tiempo, los judíos se asimilarían a la cultura pagana que los rodeaba; la herencia reveladora se perdería, y la línea mesiánica de la promesa se extinguiría. Los profetas postexílicos se enfrentaron a la tarea de animar al pueblo a distinguirse de los demás pueblos por el carácter de su obediencia, y esta obediencia debía comenzar con la reconstrucción del templo y el restablecimiento de las leyes mosaicas.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Hageo es el segundo libro más breve del Antiguo Testamento, después de Abdías, pero esta serie de cuatro sermones breves, fuertes y francos, logra el efecto deseado. Los trabajos en el templo habían cesado y el pueblo se había preocupado más por el embellecimiento de sus propias casas que por la construcción del santuario central de Dios. Debido a sus prioridades equivocadas, sus trabajos futuros no pueden ser bendecidos por Dios. Sólo cuando el pueblo pusiera al Señor en primer lugar, completando la tarea que Él les había encomendado, su mano de bendición volvería a estar sobre ellos.</p>',
            'temas_estructura' => '<p>El tema básico de Hageo es claro: el remanente debe reordenar sus prioridades y completar el templo antes de poder esperar las bendiciones de Dios. Los cuatro mensajes registrados aquí pueden titularse: la terminación del último templo (1:1-15), la gloria del último templo (2:1-9), las bendiciones presentes de la obediencia (2:10-19) y las bendiciones futuras de la promesa (2:20-23).
</p><p>
La promesa de Hageo 2:9 señala el papel crucial que iba a tener el segundo templo en el plan redentor de Dios. Herodes el Grande pasó años ampliando y enriqueciendo este templo, y se llenó de la gloria de Dios encarnada cada vez que Cristo vino a Jerusalén.
</p><p>
El Mesías también se representa en la persona de Zorobabel (2:23), que se convierte en el centro de la línea mesiánica, sellando ambas ramas.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/hag/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'Estudio y análisis del libro de Zacarías',
                'description' => 'Descubre visiones proféticas y mensajes de esperanza y restauración para Jerusalén, anticipando el reinado de un Mesías justo y humilde.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Zacarías',
                'abreviatura' => 'Zac.',
                'abreviatura_online' => 'zech',
                'num_capitulos' => 14,
                'palabra_clave' => 'Preparación para el Mesías',
                'concepto_principal' => 'Salvación por la santidad del templo',
                'autor' => 'Zacarías',
                'autor_why' => '<p>Zacarías, cuyo nombre significa "Yahvé recuerda", fue uno de los profetas postexílicos y contemporáneo de Ageo. El nombre "Zacarías" era muy popular en el Antiguo Testamento, pues lo compartían nada menos que veintinueve personajes del Antiguo Testamento.
</p><p>
Como hijo de Berequías y nieto de Iddo, procedía de una de las familias sacerdotales de la tribu de Leví. Nació en Babilonia y fue llevado por su abuelo a Palestina cuando los exiliados judíos regresaron bajo Zorobabel.</p>',
                'f_redaccion' => '~530 AC',
            'fecha_redaccion_why' => '<p>Zacarías fue un contemporáneo más joven del profeta Hageo, del gobernador Zorobabel y del sumo sacerdote Josué. El escenario histórico de los capítulos 1-8 es el mismo que el de Hageo (520-518 a.C.). Las obras del templo se reanudaron en el 520 a.C. y el proyecto se completó en el 516 a.C.
</p><p>
Los capítulos 9-14 no están fechados, pero las diferencias estilísticas y las referencias a Grecia (9:13) indican una fecha de entre 480 y 470 a.C. Esto significaría que Darío I (521-486 a.C.) había desaparecido de la escena y había sido sucedido por Jerjes (486-464 a.C.), el rey que hizo a Ester reina de Persia.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Durante una docena de años o más, la tarea de reconstruir el templo había quedado a medias. El profeta Zacarías fue comisionado por Dios para animar al pueblo a completar esta importante tarea. En lugar de exhortarles con fuertes palabras de reprimenda, Zacarías ofreció un objetivo muy positivo: el templo debe ser construido, pues algún día la gloria del Mesías lo habitará.</p>',
                'temas_estructura' => '<p>Zacarías utiliza una serie de ocho visiones, cuatro mensajes y dos cargas para describir los planes futuros de Dios para su pueblo del pacto. Los primeros ocho capítulos se escribieron para animar al remanente mientras reconstruían el templo; los últimos seis capítulos se escribieron después de la finalización del templo para anticipar la llegada del Mesías de Israel. Zacarías pasa de la dominación gentil al gobierno mesiánico, de la persecución a la paz y de la impureza a la santidad.
</p><p>
Los últimos seis capítulos no están claramente ligados a una situación histórica concreta de la vida del profeta, sino que prevén los acontecimientos que conducirán a la era mesiánica que se avecina. Aquí se predice el ascenso de Grecia, el advenimiento y el rechazo del Mesías, y el triunfo final del Mesías.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/zech/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'Estudio y análisis del libro de Malaquías',
                'description' => 'Conoce los llamados al arrepentimiento y a la fidelidad en los diezmos, y las promesas de bendiciones y la venida de un mensajero antes del día del Señor.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'division_id' => 5,
                'nombre' => 'Malaquías',
                'abreviatura' => 'Mal.',
                'abreviatura_online' => 'mal',
                'num_capitulos' => 4,
                'palabra_clave' => 'Apelación para los reincidentes',
                'concepto_principal' => 'Profecía sobre Juan el Bautista y el Mesías',
                'autor' => 'Malaquías',
                'autor_why' => '<p>El nombre "Malaquías" significa "Mi Mensajero". Aunque algunos lo han considerado un título más que un nombre, esto es poco probable ya que tal uso sería único entre los profetas. Desconocido para nosotros, aparte de la supercripción de este libro, Malaquías fue el último de los profetas del Antiguo Testamento y el autor de este último libro del Antiguo Testamento.</p>',
                'f_redaccion' => '~450 AC',
            'fecha_redaccion_why' => '<p>Aunque no se puede establecer una fecha exacta para Malaquías, se pueden utilizar pruebas internas para deducir una fecha aproximada. El uso del término persa para gobernador, pechah (1:8), indica que el libro fue escrito durante la dominación persa de Israel. El templo había sido reconstruido, ya que se ofrecían sacrificios en él (1:7-10). Además, el oráculo de Malaquías abordaba los mismos problemas a los que se enfrentaba Nehemías: sacerdotes corruptos (1:6-2:9; cf. Neh. 13:1-9), descuido de los diezmos y las ofrendas (3:7-12; cf. Neh. 13:10-13) y matrimonios mixtos con esposas paganas (2:10-16; cf. Neh. 13:23-28). Nehemías había llegado a Jerusalén en el 444 a.C. para reconstruir las murallas de la ciudad, pero regresó a Persia en el 432 a.C. A su regreso a Palestina (hacia el 425 a.C.), Nehemías se ocupó de los pecados descritos en Malaquías. Por tanto, es probable que Malaquías proclamara su mensaje mientras Nehemías estaba ausente entre el 432 y el 425 a.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Malaquías, profeta en los días de Nehemías, dirigió su mensaje de juicio a un pueblo plagado de sacerdotes corruptos, prácticas perversas y un falso sentido de seguridad. Utilizando el método de preguntas y respuestas, Malaquías indaga profundamente en sus problemas de hipocresía, infidelidad, matrimonios mixtos, divorcio, falso culto y arrogancia.
</p><p>
Durante cuatrocientos años, después de las sonoras condenas de Malaquías, Dios permaneció en silencio. Sólo con la llegada de Juan el Bautista (3:1), Dios vuelve a comunicarse con su pueblo a través de la voz de un profeta.</p>',
                'temas_estructura' => '<p>El pueblo de Israel se había desilusionado y dudado. Internamente se preguntaban si las promesas mesiánicas de Dios se cumplirían alguna vez y si valía la pena servir a Dios después de todo. Externamente, estas actitudes se manifestaban en un ritualismo vacío, en la falta de fe para pagar los diezmos y las ofrendas, y en la indiferencia hacia la ley moral y ceremonial.
</p><p>
Malaquías desafía estos problemas y actitudes y llama al pueblo a un nuevo compromiso y obediencia. El libro de Malaquías puede dividirse en tres partes principales: el privilegio de la nación (1:1-5), la contaminación de la nación (1:6-3:15) y la promesa a la nación (3:16-4:6).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/ot/mal/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'Estudio y análisis del libro de Mateo',
                'description' => 'Explora la vida, enseñanzas y milagros de Jesucristo, destacando su linaje davídico y cumplimiento de las profecías mesiánicas.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 6,
                'nombre' => 'Mateo',
                'abreviatura' => 'Mateo',
                'abreviatura_online' => 'matt',
                'num_capitulos' => 28,
                'palabra_clave' => 'Jesús el Rey',
                'concepto_principal' => 'Rechazo formal de los judíos a Jesús',
                'autor' => 'Compilador',
                'autor_why' => '<p>Los primeros manuscritos del primer Evangelio no identifican a un autor, y algunos estudiosos modernos rechazan a Mateo como autor. Sin embargo, desde el siglo II d.C., la tradición eclesiástica reconoce a Mateo, discípulo de Jesús y apóstol, como su escritor.
</p><p>
Antes de su llamada a seguir a Jesús (9:9-13), Mateo ocupaba el impopular puesto de recaudador de impuestos en Cafarnaúm para el gobierno romano. Como recaudador de impuestos, Mateo probablemente estaba acostumbrado a tomar notas y a llevar un registro de lo que ocurría a su alrededor. El carácter judío de este Evangelio encaja bien con un autor así.</p>',
                'f_redaccion' => '~60 DC?',
            'fecha_redaccion_why' => '<p>Algunos han sugerido una fecha tan temprana como el año 50 d.C., y Mateo fue citado por primera vez por uno de los padres de la iglesia alrededor del año 110 d.C. La datación exacta depende, en cierta medida, de la relación de Mateo con Marcos y Lucas (véase "Los cuatro evangelios").
</p><p>
Las dos expresiones "hasta el día de hoy" (27:8) y "hasta el día de hoy" (28:15) indican que ha transcurrido un periodo de tiempo considerable desde los acontecimientos descritos en el libro, pero también apuntan a una fecha probable anterior a la destrucción de Jerusalén en el año 70 d.C. El sabor judío de este Evangelio es otro argumento a favor de una fecha anterior al año 70. Si Mateo dependía del Evangelio de Marcos como fuente, la fecha de Marcos determinaría la fecha más temprana posible para Mateo, y un marco temporal probable para este libro es el 58-68 d. C. Es posible que haya sido escrito en Palestina o en Antioquía de Siria.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El Evangelio de Mateo se sitúa apropiadamente al principio del Nuevo Testamento. Esto no se debe a que sea el primer libro del Nuevo Testamento, o incluso el primer Evangelio, que se escribió. Más bien, más que cualquiera de los otros Evangelios, enfatiza la relación de Jesús con el Antiguo Testamento. Así, sirve de puente, conectando los dos Testamentos como promesa y cumplimiento.</p>',
            'temas_estructura' => '<p>Desde el punto de vista temático, Mateo puede esquematizarse de la siguiente manera: la presentación del Rey (1:1-4:11); la proclamación del Rey (4:12-7:29); el poder del Rey (8:1-11:1); el rechazo progresivo del Rey (11:2-16:2); la preparación de los discípulos del Rey (16:13-20:28); la presentación y el rechazo del Rey (20:29-27:66); y la prueba o vindicación del Rey (28:1-20).
</p><p>
Una clave importante de la estructura literaria de Mateo se encuentra en la frase "cuando Jesús terminó" (7:28; 11:1; 13:53; 19:1; 26:1), que se utiliza para concluir los cinco discursos clave del libro: el Sermón de la Montaña (5:3-7:27), la Instrucción de los Discípulos (10:5-42), las Parábolas del Reino (13:3-52), los Términos del Discipulado (18:3-35) y el Discurso del Olivar (24:4-25:46). Esta estructura quíntuple, común en el judaísmo (por ejemplo, el Pentateuco), puede revelar el propósito de Mateo de mostrar a Jesús como el cumplimiento de la profecía relativa al profeta que vendría como Moisés (Dt. 18:15).
</p><p>
La Iglesia primitiva colocó a Mateo en primer lugar en el canon de los libros del Nuevo Testamento porque es un puente natural entre los Testamentos. Mateo presenta a Jesús como el prometido rey mesiánico de Israel y descendiente real de David. Para demostrar que Jesús cumple los requisitos del Mesías, Mateo utiliza más citas y alusiones del Antiguo Testamento que cualquier otro libro del Nuevo Testamento (casi 130). En este Evangelio se utiliza con frecuencia la frase "para que se cumpla lo que se dijo por medio del profeta", que aparece nueve veces en Mateo y ni una sola en los demás Evangelios.
</p><p>
Mateo destaca a Jesús como maestro. En especial, era un intérprete autorizado de la Ley de Moisés y de la voluntad de Dios (4:23; 5:2; 7:28, 29).
</p><p>
Mateo es el único Evangelio que menciona explícitamente a la Iglesia (16:18; 18:17), y la frase "reino de los cielos" aparece treinta y dos veces en este Evangelio, pero en ningún otro lugar del Nuevo Testamento.
</p><p>
La narración de Mateo incluye algunos acontecimientos que no se mencionan o que no tienen un paralelo preciso en los otros Evangelios, por ejemplo, la visita de los sabios (2:1-12), la huida a Egipto (2:12-23) y el Sermón de la Montaña (5:1-7:29).
</p><p>
El cumplimiento de la profecía se produjo cuando José y María fueron a Egipto (2:15; cf. Os. 11:1) tras la visita de los sabios. Mateo pretende que sus lectores vean un vínculo implícito entre Jesús e Israel (el Hijo que sale de Egipto, Oseas 11:1). Muchos sugieren que, al emplear Oseas 11:1 en 2:15, Mateo da a entender que Jesús recapitula la historia de Israel y encarna en sí mismo el futuro de Israel como pueblo de Dios.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/matt/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'Estudio y análisis del libro de Marcos',
                'description' => 'Descubre la misión de Jesucristo a través de un relato directo y dinámico, enfatizando sus milagros y el anuncio del Reino de Dios.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 6,
                'nombre' => 'Marcos',
                'abreviatura' => 'Mar.',
                'abreviatura_online' => 'mark',
                'num_capitulos' => 16,
                'palabra_clave' => 'Jesús el Siervo',
                'concepto_principal' => 'La confesión de Pedro',
                'autor' => 'Juan Marcos',
            'autor_why' => '<p>El Evangelio de Marcos, al igual que los demás Evangelios, es técnicamente anónimo, ya que el autor no se identifica. Sin embargo, el claro testimonio de los primeros padres de la Iglesia es que este libro fue escrito por Juan Marcos, cuya familia ocupaba un lugar destacado en la primera iglesia de Jerusalén (Hechos 12:12). Marcos fue compañero de Pablo y Bernabé en su primer viaje misionero (Hechos 12:25; 13:13). Aunque Pablo se negó a llevar a Marcos en su segundo viaje (Hechos 15:37, 38), posteriormente se reconcilió con Pablo (Col. 4:10) y se asoció con Pedro (1 P. 5:13).</p>',
                'f_redaccion' => '~68 DC',
            'fecha_redaccion_why' => '<p>Muchos estudiosos creen que Marcos fue el primero de los cuatro Evangelios, pero hay dudas sobre su fecha. Debido a la profecía sobre la destrucción del templo (13:2), debería fecharse antes del año 70 d.C., pero las primeras tradiciones no se ponen de acuerdo sobre si se escribió antes o después del martirio de Pedro (hacia el año 64 d.C.). El rango probable para este libro es el 55-68 d.C.
</p><p>
Es evidente que Marcos se dirigía a un público romano, y la tradición primitiva indica que se originó en Roma. Tal vez por ello, Marcos omitió una serie de elementos que no habrían sido significativos para los gentiles, como la genealogía de Cristo, el cumplimiento de las profecías, las referencias a la Ley y ciertas costumbres judías que se encuentran en los otros Evangelios. Marcos también interpreta palabras en arameo (3:17; 5:41; 7:34; 15:22) y utiliza varios términos latinos en lugar de sus equivalentes griegos (4:21; 6:27, 42; 15:15, 16, 39).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Marcos, el más corto de los cuatro Evangelios, nos cuenta más las acciones que las enseñanzas de Jesús. La mayoría de los acontecimientos registrados aparecen también en Mateo y Lucas, pero Marcos los narra con mayor detalle y viveza. Su estilo directo y rápido lleva al lector rápidamente al acontecimiento central del evangelio: la muerte y resurrección de Jesús.</p>',
            'temas_estructura' => '<p>Marcos estructura su Evangelio en torno a varios movimientos geográficos de Jesús, que tienen como punto culminante su muerte y posterior resurrección. Tras la introducción, Marcos narra el ministerio público de Jesús en Galilea (1:14-8:30), de camino a Judea (8:31-10:52) y en Jerusalén (11:1-13:37), culminando con la pasión (14:1-15:47) y la resurrección (cap. 16).
</p><p>
Marcos, el más breve y sencillo de los cuatro Evangelios, ofrece un relato vívido y rápido del ministerio de Cristo. La palabra distintiva de este libro es el término griego euthus, traducido como "inmediatamente" o "en seguida", y aparece más veces en este breve Evangelio que en el resto de los libros del Nuevo Testamento juntos. Cristo se dirige constantemente hacia una meta que está oculta para casi todos.
</p><p>
Marcos destaca el poder y la autoridad de Jesús, el Hijo eterno de Dios, como maestro (1:22), y sobre Satanás y los espíritus inmundos (1:27; 3:19-30), el pecado (2:1-12), el sábado (2:27, 28; 3:1-6), la naturaleza (4:35-41; 6:45-52), la enfermedad (5:21-34), la muerte (5:35-43), la tradición legalista (7:1-13, 14-20) y el templo (11:15-18).
</p><p>
Casi el cuarenta por ciento de este Evangelio está dedicado a un relato detallado de los últimos ocho días de la vida de Jesús, cuyo punto culminante es su resurrección. En muchos sentidos, Marcos enfatiza la pasión y la resurrección como el indicador por el que se puede medir todo el ministerio de Jesús.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/mark/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'Estudio y análisis del libro de Lucas',
                'description' => 'Conoce la historia detallada de Jesús, desde su nacimiento hasta su ascensión, destacando su compasión y atención a los marginados.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 6,
                'nombre' => 'Lucas',
                'abreviatura' => 'Lucas',
                'abreviatura_online' => 'luke',
                'num_capitulos' => 24,
                'palabra_clave' => 'Jesús el Hijo del Hombre',
                'concepto_principal' => 'Salvar lo que se había perdido',
                'autor' => 'Lucas',
            'autor_why' => '<p>El tercer Evangelio es anónimo, pero los estudiosos coinciden en que Lucas escribió tanto este Evangelio como el libro de los Hechos. El autor ha sido identificado por los llamados "pasajes del nosotros" en los Hechos (Hechos 16:10-17; 20:5-21:18; 27:1-28:16). El autor de los Hechos escribe principalmente desde un punto de vista en tercera persona, pero en estos pasajes cambia bruscamente a la primera persona, lo que indica que estuvo presente personalmente y fue compañero de viaje de Pablo. Dado que Lucas no se menciona en ninguno de los "pasajes del nosotros", es probable que sea ese compañero.
</p><p>
Puede que Lucas fuera un judío helenista, pero es más probable que fuera un gentil. En Colosenses 4:10-14, Pablo enumera a tres colaboradores que son "de la circuncisión" y luego incluye el nombre de Lucas con dos gentiles. Se ha sugerido que Lucas pudo haber sido un médico griego de una familia romana (era común que los esclavos griegos sirvieran como médicos) que en algún momento fue liberado. La tradición antigua apoya firmemente a Lucas como el autor de Lucas-Hechos, y una vertiente de la tradición antigua sostiene que Lucas era de Antioquía de Siria, permaneció soltero y murió a la edad de ochenta y cuatro años.</p>',
                'f_redaccion' => '~70 DC',
            'fecha_redaccion_why' => '<p>En cuanto a la fecha de composición de Lucas, los estudiosos se dividen generalmente en dos posiciones. Los partidarios de una fecha posterior sitúan el escrito después del año 70 d.C. porque afirman que el 21:20 indica que la caída de Jerusalén ya había tenido lugar (esta postura asume que es imposible una auténtica profecía predictiva).
</p><p>
Las evidencias bíblicas apuntan a los años 58-63 d.C. como la época más probable de redacción. Lucas fue escrito antes que los Hechos, su volumen complementario, y el último capítulo de los Hechos relata acontecimientos que ocurrieron hacia el año 63 d.C. (y probablemente concluye así porque los acontecimientos fueron contemporáneos). Si Hechos fue escrito durante el encarcelamiento romano de Pablo (c. 63 d.C.), el Evangelio de Lucas puede haber sido compuesto durante los dos años de encarcelamiento de Pablo en Cesarea, antes del viaje a Roma.</p>',
                'descripcion' => '',
            'introduccion' => '<p>El Evangelio de Lucas, el primero de una obra en dos partes (el segundo es el libro de los Hechos), es el más largo y literario de los cuatro Evangelios. Presenta la ascendencia, el nacimiento y los primeros años de vida de Jesús, antes de pasar cuidadosamente por su ministerio, su muerte y su resurrección, por lo que Lucas es también el más completo de los Evangelios.</p>',
            'temas_estructura' => '<p>Lucas tiene mucho en común con los otros evangelios sinópticos -Mateo y Marcos-, pero aproximadamente la mitad del material de Lucas es exclusivamente suyo. En particular, Lucas destaca el último viaje de Jesús desde Galilea a Jerusalén. Esta sección especial, a menudo llamada "diario de viaje" (9:51-19:27), contiene muchas parábolas que no están registradas de otra manera.
</p><p>
Un rasgo distintivo del Evangelio de Lucas es su énfasis en la universalidad del mensaje cristiano. Jesús no es sólo el Mesías judío, sino el Salvador de todo el mundo (2:32; 24:27). Al presentar a Jesús como el Salvador de todos los pueblos, Lucas presta especial atención al ministerio de Jesús con los pobres, los marginados y las mujeres.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/luke/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'Estudio y análisis del libro de Juan',
                'description' => 'Profundiza en la divinidad de Jesús y su relación íntima con el Padre, a través de discursos y símbolos que revelan su misión salvadora.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 6,
                'nombre' => 'Juan',
                'abreviatura' => 'Juan',
                'abreviatura_online' => 'john',
                'num_capitulos' => 21,
                'palabra_clave' => 'Creer',
                'concepto_principal' => 'La conversión y el nuevo nacimiento',
                'autor' => 'Juan el Amado',
            'autor_why' => '<p>Aunque el Evangelio de Juan no designa específicamente a su autor, muchos factores apoyan la creencia largamente sostenida de que fue Juan el apóstol, el hermano de Santiago e hijo de Zebedeo. Según 20:21, 24, este Evangelio fue escrito por "el discípulo a quien Jesús amaba" y, del círculo íntimo de los discípulos de Jesús (Pedro, Santiago y Juan), Juan es el único candidato probable. El hecho de que el autor fuera un judío palestino y un testigo ocular de los acontecimientos que describe también apoya la autoría juanina.
</p><p>
Las primeras fuentes escritas y la persistente tradición sobre el apóstol Juan señalan a Éfeso como el lugar más probable para el origen del Evangelio. Se cree que Juan vivió y trabajó en la zona de Éfeso durante muchos años, y se cree que una tumba descubierta allí es suya. Además, varios términos e ideas clave contenidos en el Evangelio habrían sido especialmente adecuados para esta zona de Asia Menor.</p>',
                'f_redaccion' => '~90 DC',
            'fecha_redaccion_why' => '<p>El padre de la iglesia Ireneo atestigua explícitamente que Juan escribió el Evangelio mientras residía en Éfeso (66-98 d.C.), y hay pocas razones para cuestionar una fecha dentro de este período. Aunque algunos estudiosos han sostenido en el pasado que el Evangelio de Juan se compuso a mediados del siglo II d.C., el descubrimiento en Egipto de un fragmento de papiro del Evangelio de Juan que data de alrededor del año 125 d.C. hace casi segura una fecha del primer siglo.</p>',
                'descripcion' => '',
                'introduccion' => '<p>El Evangelio de Juan ha ocupado durante mucho tiempo un lugar de gran honor y devoción entre los cristianos. La profundidad de su mensaje -que se centra en el misterio de la Persona de Cristo y la encarnación, su relación con el Padre y la importancia de creer en Cristo-, junto con la relativa sencillez de su construcción, hace que con frecuencia sea la primera parte de las Escrituras que se traduce a otro idioma.</p>',
            'temas_estructura' => '<p>En la actualidad, Juan presenta las enseñanzas de Jesús en forma de discursos teológicos más largos: el discurso sobre el pan de vida (6:41-59), el buen pastor y sus ovejas (10:1-30), la vid y los sarmientos (15:1-8) y la oración sacerdotal (17:1-26). En estos discursos se utilizan con frecuencia pares de ideas contrastantes, como luz/oscuridad, creencia/descreimiento, amor/odio y terrenal/cielo. A diferencia de los Evangelios sinópticos, que se centran en el ministerio galileo, Juan hace hincapié en los acontecimientos de Judea y registra tres o cuatro visitas de Jesús a Jerusalén con motivo de la Pascua.
</p><p>
Aunque los sinópticos están llenos de materia prima para la doctrina cristológica, Juan muestra una convicción más intensa de la centralidad de la persona de Cristo. Para Juan, la actividad de Cristo no es comprensible aparte del hecho de que es el Mesías, el Hijo de Dios y Dios mismo (1:1-18). Este énfasis en la Persona de Jesús se pone de manifiesto en la inclusión por parte de Juan de siete dichos "Yo soy".</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/john/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'Estudio y análisis del libro de Hechos',
                'description' => 'Sigue el nacimiento y expansión de la Iglesia primitiva bajo la guía del Espíritu Santo, desde Jerusalén hasta los confines del mundo conocido.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 7,
                'nombre' => 'Hechos',
                'abreviatura' => 'Hech.',
                'abreviatura_online' => 'acts',
                'num_capitulos' => 28,
                'palabra_clave' => 'Poder para ser testigos',
                'concepto_principal' => 'La transformación por el Espíritu Santo',
                'autor' => 'Lucas',
            'autor_why' => '<p>El libro de los Hechos es el segundo de un conjunto de dos volúmenes, ambos dirigidos a Teófilo y escritos por uno de los socios de Pablo llamado Lucas "el médico amado" (Col. 4:14). El autor de los Hechos fue compañero de Pablo en muchos de sus viajes, como implica el uso de la palabra "nosotros" (por ejemplo, Hechos 16:10), y estuvo con Pablo durante su encarcelamiento en Roma (véase 2 Tim. 4:11).
</p><p>
Lucas 1:3, 4 ofrece una pista sobre el propósito del autor: proporcionar "un relato ordenado... para que conozcáis la certeza de las cosas en las que fuisteis instruidos". Lucas fue un investigador y cronista de los acontecimientos en beneficio de su amigo Teófilo y del lector general.</p>',
                'f_redaccion' => '~62 DC',
            'fecha_redaccion_why' => '<p>La narración de los Hechos concluye con Pablo bajo arresto domiciliario en Roma (hacia el año 62). Como los Hechos no dan ninguna pista sobre la persecución bajo Nerón (64 d. C.), la muerte de Pablo (c. 68 d. C.) o la destrucción de Jerusalén (70 d. C.), muchos sitúan la redacción de los Hechos en el periodo 63-64 d. C.</p>',
                'descripcion' => '',
            'introduccion' => '<p>Las últimas palabras de Jesús se conocen como la Gran Comisión: "Seréis testigos de mí en Jerusalén, en toda Judea y Samaria, y hasta lo último de la tierra" (1:8). El libro de los Hechos es la historia de los hombres y mujeres que se tomaron en serio esa comisión y comenzaron a difundir el evangelio de Cristo hasta los rincones más remotos del mundo conocido.</p>',
            'temas_estructura' => '<p>Cada sección del libro (caps. 1-7; 8-12; 13-28) se centra en un público concreto, una personalidad clave y una fase significativa de la expansión del mensaje evangélico.
</p><p>
El Cristo resucitado es el tema central de los sermones y las defensas de los Hechos. Las Escrituras del Antiguo Testamento, la resurrección histórica, el testimonio apostólico y el poder de convicción del Espíritu Santo dan testimonio de que Jesús es tanto Señor como Cristo (2:22-36; 10:34-43) y el único camino de salvación (4:12).
</p><p>
El crecimiento de la Iglesia se pone de manifiesto en los Hechos. Aunque hay cuatro relatos de la vida de Jesús, éste es el único libro que continúa la historia desde su ascensión hasta el período de las epístolas del Nuevo Testamento. Así pues, Hechos es el vínculo histórico entre los Evangelios y las epístolas y fue escrito para trazar el desarrollo del cuerpo de Cristo a lo largo de la transición de una generación de miembros principalmente judíos a otros predominantemente gentiles. Esta obra apologética presenta el cristianismo como algo distinto del judaísmo, pero también como su realización.
</p><p>
A lo largo del libro, se hace hincapié en la actividad del Espíritu Santo y en el poder de la resurrección de Jesús. Debido al fuerte énfasis de Lucas en el ministerio del Espíritu Santo, este libro podría considerarse como "los Hechos del Espíritu de Cristo actuando en y a través de los Apóstoles."</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/acts/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'Estudio y análisis del libro de Romanos',
                'description' => 'Descubre las enseñanzas de Pablo sobre la justificación por la fe, la vida en el Espíritu y la inclusión de gentiles y judíos en el plan de salvación.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Romanos',
                'abreviatura' => 'Rom.',
                'abreviatura_online' => 'rom',
                'num_capitulos' => 16,
                'palabra_clave' => 'La justicia de Dios',
                'concepto_principal' => 'La vida de la comunidad cristiana',
                'autor' => 'Pablo',
            'autor_why' => '<p>Existe un consenso abrumador entre los estudiosos de que el apóstol Pablo escribió este libro fundacional del Nuevo Testamento. El vocabulario, el estilo, la lógica y el desarrollo teológico son coherentes con las demás epístolas de Pablo. Pablo dictó la carta a un secretario llamado Tercio (16:22), a quien se le permitió añadir su propio saludo.
</p><p>
Aunque la autoría paulina es incuestionable, la unidad de la epístola ha sido objeto de debate. Algunos han argumentado que el capítulo 16 estaba originalmente separado de la carta, pero que fue añadido en una fecha posterior. Sin embargo, es más sencillo entender la lista de saludos de este capítulo final como un esfuerzo de Pablo, como extraño a la iglesia romana, por enumerar a sus amigos comunes.</p>',
                'f_redaccion' => '~57 DC',
            'fecha_redaccion_why' => '<p>El hecho de que el propio Pablo no hubiera visitado aún Roma en el momento de escribirse Romanos se desprende de 1:13. La epístola debe fecharse durante el tercer viaje misionero, cuando se dedicó a recaudar un fondo para la iglesia de Jerusalén. Cuando escribió 2 Corintios, en su viaje de Éfeso a Corinto, la colecta estaba aún incompleta (2 Cor. 8:1-9). Cuando escribió a la iglesia de Roma, esta colecta parece haberse completado (15:26-28). Por lo tanto, suponemos que Pablo escribió la epístola a los romanos desde Corinto, donde permaneció durante tres meses en el año 57 d.C., al final de su tercer viaje misionero, antes de viajar a Jerusalén (15:25; Hechos 20:2, 3).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Romanos es, desde el punto de vista teológico, la más importante de todas las epístolas escritas por Pablo, y contiene su presentación más completa y lógica del evangelio. Este libro ha desempeñado repetidamente papeles importantes a lo largo de la historia de la Iglesia. Agustín, un teólogo del siglo IV, se convirtió leyendo Romanos. Asimismo, en el siglo XVI el libro de Romanos inspiró a Martín Lutero cuando descubrió en él la verdad de la justificación por la fe. Siglos más tarde, el corazón de Juan Wesley se "calentó extrañamente" cuando oyó leer en voz alta el prefacio de Lutero a esta epístola.</p>',
            'temas_estructura' => '<p>La frase clave de esta epístola se encuentra en 1:17: "la justicia de Dios". Esta frase encierra el corazón mismo de la epístola. Romanos está escrita, por tanto, para mostrar cómo los hombres y mujeres pecadores pueden recibir la justicia de Dios mediante la fe en Jesucristo. El tema de la justicia divina que recorre el libro se refleja en el siguiente esquema: la revelación de la justicia de Dios (caps. 1-8); la reivindicación de la justicia de Dios (caps. 9-11); y la aplicación de la justicia de Dios (caps. 12-16).
</p><p>
En el contexto de su tema general de la justicia de Dios, Pablo analiza la necesidad de la humanidad pecadora de la justicia de Dios (1:18-3:20), la imputación de la justicia de Cristo a los seres humanos pecadores en la justificación (3:21-5:21) y la santificación de los redimidos (6:1-8:39). Además, Pablo habla de la justicia de Dios revelada en su fidelidad a las promesas del pacto con Israel (9:1-11:36), y de la justicia que los cristianos deben mostrar ante los demás y ante el mundo (12:1-16:27).
</p><p>
En su amplia presentación del plan de salvación de Dios, Pablo pasa de la condenación a la glorificación y de la verdad teológica al comportamiento práctico. Las palabras clave, como justicia, fe, ley, todo y pecado, aparecen al menos sesenta veces en esta epístola.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/rom/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'Estudio y análisis del libro de 1 Corintios',
                'description' => 'Aborda los desafíos éticos y doctrinales en la Iglesia de Corinto, destacando la importancia del amor, la unidad y la resurrección de Cristo.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '1 Corintios',
                'abreviatura' => '1 Cor.',
                'abreviatura_online' => '1-cor',
                'num_capitulos' => 16,
                'palabra_clave' => 'Corrección de la vida carnal',
                'concepto_principal' => 'La definición suprema del amor',
                'autor' => 'Pablo',
            'autor_why' => '<p>La autoría paulina de 1 Corintios es casi universalmente aceptada. Además de las afirmaciones explícitas de la epístola (1:1; 16:21), el vocabulario y las enseñanzas del texto señalan a Pablo como apóstol de los gentiles. Las referencias a esta carta en la literatura extrabíblica se encuentran ya en el año 95 d.C., cuando Clemente de Roma menciona que 1 Corintios fue escrita por Pablo.</p>',
                'f_redaccion' => '~56 DC',
            'fecha_redaccion_why' => '<p>La Primera Corintios fue escrita probablemente durante el tercer viaje misionero de Pablo, en el año 56 ó 57 d.C., y la Segunda Corintios se escribió entre seis y dieciocho meses después. Pablo había fundado la iglesia de Corinto durante una estancia de dieciocho meses en la ciudad (51-52 d. C.).
</p><p>
La Corinto que Pablo conoció había sido fundada como colonia romana durante el siglo antes de Cristo. Estaba estratégicamente situada en la provincia romana de Acaya, en una estrecha franja de tierra entre el Mar Egeo y el Mar Adriático, con dos puertos adyacentes. La ubicación de Corinto la convirtió en un centro de las rutas comerciales que pasaban de este a oeste, y la prosperidad resultante trajo consigo tanto el lujo como la inmoralidad. "Vivir como un corintio" significaba vivir en la inmoralidad, y muchos templos paganos situados en Corinto fomentaban esta forma de vida licenciosa a través de la prostitución en el templo.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Primera de Corintios revela los problemas, las presiones y las luchas de una iglesia llamada a salir de una sociedad pagana. Pablo aborda una serie de problemas en el estilo de vida de los cristianos de Corinto: facciones, pleitos, inmoralidad, prácticas cuestionables, abuso de la Cena del Señor y dones espirituales. Además de palabras de disciplina, Pablo comparte palabras de consejo en respuesta a las preguntas planteadas por los corintios.</p>',
            'temas_estructura' => '<p>Esta epístola es bastante ordenada en su enfoque, ya que aborda secuencialmente un grupo de problemas que han llegado a la atención de Pablo. Además, Pablo ofrece una serie de perspectivas sobre diversas cuestiones y temas planteados por los corintios en una carta. Las tres divisiones de 1 Corintios son: (1) la respuesta al informe de Cloe sobre las divisiones (caps. 1-4); (2) la respuesta al informe sobre la fornicación y el desorden (caps. 5-6); y (3) la respuesta a la carta de preguntas (caps. 7-16).
</p><p>
Mientras se prepara para tratar los graves problemas presentes en la iglesia de Corinto al principio de la epístola, Pablo proclama la relevancia y la suficiencia de Cristo para cada área de la vida del creyente. Cristo Jesús "se convirtió para nosotros en sabiduría de Dios, justicia, santificación y redención" (1:30).
</p><p>
Al tratar la inmoralidad sexual que había surgido en la iglesia de Corinto, Pablo subraya la importancia de la disciplina y la pureza de la iglesia (5:9-13). Aquí el apóstol también indica que un objetivo primordial de dicha disciplina es la restauración del descarriado.
</p><p>
También se explora la relación entre la libertad y el amor cristianos. Pablo escribe que "todo me es lícito, pero no todo me sirve" (6:12), y el capítulo 13 contiene la enseñanza más extensa y profunda sobre el carácter de entrega del amor cristiano.
</p><p>
Además, 1 Corintios contiene una amplia instrucción doctrinal sobre el lugar de los dones espirituales en la iglesia (caps. 12-14), y sobre la naturaleza del cuerpo de la resurrección (cap. 15).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/1-cor/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'Estudio y análisis del libro de 2 Corintios',
                'description' => 'Explora la defensa de Pablo de su ministerio y su enseñanza sobre la reconciliación, la generosidad y el poder de Dios en la debilidad.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '2 Corintios',
                'abreviatura' => '2 Cor.',
                'abreviatura_online' => '2-cor',
                'num_capitulos' => 13,
                'palabra_clave' => 'Pablo defiende su ministerio',
                'concepto_principal' => 'El plan de Dios para el servidor alegre',
                'autor' => 'Pablo',
                'autor_why' => '<p>Las pruebas externas e internas apoyan ampliamente la autoría paulina de esta carta. Al igual que con Romanos, el problema de 2 Corintios es la cuestión de su unidad. Muchos han sugerido que los capítulos 10-13 no formaban parte de esta carta en su forma original debido a su contraste, en tono y tema, con los capítulos 1-9. Entre los que niegan la unidad de la epístola, la solución más popular es que los capítulos 10-13 pertenecen a una carta de Pablo, ahora perdida, a la que se hace referencia en 2:4. Sin embargo, es más razonable explicar la diferencia de tono entre los capítulos 1-9 y 10-13 como debida al cambio de enfoque de la mayoría arrepentida a la minoría rebelde.</p>',
                'f_redaccion' => '~57 DC',
                'fecha_redaccion_why' => '<p>Pablo escribió 2 Corintios desde Macedonia durante su tercer viaje misionero, probablemente en el año 56 ó 57 d.C. Fue escrita quizás entre seis meses y un año después de 1 Corintios. Véase el mapa, "Tercer y cuarto viaje de Pablo".
</p><p>
Muchos estudiosos creen que 2 Corintios fue, en realidad, la cuarta carta que Pablo escribió a los creyentes de Corinto. En 1 Corintios 5:9, Pablo habla de una epístola anterior, y después de escribir 1 Corintios, Pablo visitó Corinto en lo que se ha denominado la "visita dolorosa" (2:1; cf. 13:1). Después de esta visita (su tercera a la ciudad), Pablo escribió una "carta dolorosa" (2:4), que también se ha perdido. Tito llevó esta carta a Corinto y, a su regreso, dio buenas noticias a Pablo cuando se encontraron en Macedonia (7:6-8). En señal de alivio y agradecimiento, Pablo escribió entonces 2 Corintios desde Macedonia.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Desde la primera carta de Pablo, la iglesia de Corinto había sido influenciada por falsos maestros que azuzaban al pueblo contra Pablo. Afirmaban que era inconstante, orgulloso, de apariencia y discurso poco impresionantes, deshonesto y no calificado como apóstol de Jesucristo. Pablo envió a Tito a Corinto para que se ocupara de estas dificultades y, a su regreso, se alegró al saber que los corintios habían cambiado de opinión. Pablo escribió esta carta para expresar su agradecimiento por la mayoría arrepentida y para apelar a la minoría rebelde para que aceptara su autoridad. A lo largo del libro defiende su conducta, su carácter y su vocación como apóstol de Jesucristo.</p>',
            'temas_estructura' => '<p>La Segunda de Corintios es la más autobiográfica de las cartas de Pablo, pues contiene numerosas referencias a las dificultades que sufrió en el curso de su ministerio. A lo largo de esta carta, Pablo defiende su conducta apostólica, su carácter y su llamada. El libro consta de tres partes principales: La explicación de Pablo sobre su ministerio (caps. 1-7), la colecta para los santos (caps. 8-9) y la reivindicación de Pablo de su condición de discípulo (caps. 10-13).
</p><p>
La defensa que Pablo hace de su apostolado en los capítulos 10-13 se caracteriza por el uso magistral de la ironía y el sarcasmo. Sobre todo en el llamado "Discurso de los tontos" (11:16-12:13), Pablo se burla de la vana preocupación de algunos corintios por el poder y los espectaculares dones espirituales, al "presumir" de su debilidad y de las persecuciones que había sufrido.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/2-cor/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'Estudio y análisis del libro de Gálatas',
                'description' => 'Descubre la defensa apasionada de Pablo sobre la justificación que proporciona la fe, contraponiéndose a la obligatoriedad de la ley mosaica para los gentiles.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Gálatas',
                'abreviatura' => 'Gál.',
                'abreviatura_online' => 'gal',
                'num_capitulos' => 6,
                'palabra_clave' => 'Libertad de la ley',
                'concepto_principal' => 'El poder y los resultados del Espíritu',
                'autor' => 'Pablo',
            'autor_why' => '<p>La autoría paulina y la unidad de esta epístola son prácticamente indiscutibles. De hecho, el manuscrito original de la carta fue escrito por el propio Pablo (6:11), en lugar de ser dictado a un secretario, como era la práctica habitual de Pablo.</p>',
                'f_redaccion' => 'Incierta',
            'fecha_redaccion_why' => '<p>La fecha de la epístola está relacionada con la cuestión de a quién iba dirigida. Esta incertidumbre se debe a que el término "Galacia" se utilizaba tanto en un sentido cultural/geográfico como político. La provincia política romana de Galacia incluía algunas zonas del sur de Asia Menor (por ejemplo, las ciudades de Antioquía de Pisidia, Iconio, Listra y Derbe) que no formaban parte de la porción de Asia Menor central habitada por tribus celtas y conocida como "Galacia."
</p><p>
La "teoría del norte de Galacia" sostiene que Pablo hablaba de Galacia en su sentido anterior, más restringido. Según esta teoría, las iglesias de Galacia estaban situadas al norte de las ciudades que Pablo visitó en su primer viaje misionero. Pablo visitó la Galacia étnica por primera vez en su segundo viaje misionero, probablemente mientras se dirigía a Troas (Hechos 16:6). En su tercer viaje misionero, Pablo volvió a visitar las iglesias gálatas que había establecido (Hechos 18:23) y escribió esta epístola desde Éfeso (53-56 d.C.) o desde Macedonia (56 d.C.).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Gálatas es una declaración clásica de la doctrina de la justificación por la gracia mediante la fe. Se escribió para contrarrestar a los falsos maestros que creían que una persona debía cumplir la ley judía para estar bien con Dios. Al igual que la epístola a los romanos, Gálatas ha desempeñado un papel estratégico en la historia de la iglesia cristiana. Tanto Martín Lutero como Juan Wesley registraron el impacto crucial de esta epístola en sus vidas.</p>',
            'temas_estructura' => '<p>El libro de Gálatas aborda los problemas planteados por la teología opresiva de ciertos legalizadores judíos que habían hecho que algunos de los creyentes de Galacia cambiaran su libertad en Cristo por la esclavitud a la ley. Pablo escribe esta contundente epístola para acabar con el falso evangelio de las obras y demostrar la superioridad de la justificación por la gracia mediante la fe. Esta polémica cuidadosamente escrita aborda el problema desde tres direcciones: el evangelio de la gracia defendido (caps. 1-2), el evangelio de la gracia explicado (caps. 3-4), y el evangelio de la gracia aplicado (caps. 5-6).
</p><p>
La epístola a los Gálatas ha sido llamada la "Carta Magna de la libertad cristiana". Cristo ha liberado a los creyentes de la esclavitud a la ley (legalismo) y al pecado (licencia) y los ha colocado en una posición de libertad. La Cruz transformadora de Cristo proporciona la liberación del creyente de la maldición del pecado, la ley y el yo.
</p><p>
Gálatas describe una dinámica de unión de fe con Cristo (2:20), representada visiblemente en el bautismo (3:27), que relaciona a todos los creyentes entre sí como hermanos y hermanas (3:28).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/gal/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            48 => 
            array (
                'id' => 49,
                'title' => 'Estudio y análisis del libro de Efesios',
                'description' => 'Adéntrate en la visión de Pablo de la Iglesia como el cuerpo de Cristo, unificado en diversidad y llamado a vivir en amor y santidad.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Efesios',
                'abreviatura' => 'Efe.',
                'abreviatura_online' => 'eph',
                'num_capitulos' => 6,
                'palabra_clave' => 'Edificando el cuerpo de Cristo',
                'concepto_principal' => 'La diaria lucha espiritual',
                'autor' => 'Pablo',
                'autor_why' => '<p>El nombre de Pablo aparece en 1:1 y 3:1 como autor de este libro, y la antigua tradición de la iglesia apoya esta afirmación. Sin embargo, algunos han argumentado que Efesios difiere en vocabulario y estilo, y que la visión de la iglesia universal como cuerpo de Cristo representa un desarrollo teológico posterior. Sin embargo, los argumentos basados en el vocabulario y el estilo son notoriamente subjetivos, y la riqueza de la teología en Efesios se atribuye mejor al propio crecimiento y meditación de Pablo sobre la naturaleza de la iglesia.</p>',
                'f_redaccion' => '~60 DC',
            'fecha_redaccion_why' => '<p>Como una de las "Epístolas de la Prisión" de Pablo (el nombre dado colectivamente a Efesios, Filipenses, Colosenses y Filemón), la carta estaría fechada en el período 60-63 d.C., que corresponde a la época del primer encarcelamiento romano de Pablo (cf. Hechos 28:16-31). Probablemente se escribió más o menos al mismo tiempo que Colosenses.
</p><p>
El destino de la epístola es menos seguro. Debido a que la frase "en Éfeso" (1:1) se omitió en algunos de los primeros manuscritos griegos, algunos han sugerido que la epístola era una carta circular dirigida a las iglesias de Asia Menor en su conjunto y enviada de iglesia en iglesia. Algunos estudiosos creen que esta teoría explica la referencia de Pablo en Colosenses 4:16, donde pide que la epístola a los colosenses se lea junto con la "epístola de Laodicea". Es posible que esto se refiera a una copia de Efesios con el nombre "Laodicea" insertado en un espacio en blanco para que la carta circular pudiera leerse también allí.</p>',
                'descripcion' => '',
                'introduccion' => '<p>A excepción del libro de Romanos, el libro de Efesios es la presentación de la teología cristiana más cuidadosamente escrita en el Nuevo Testamento. Pablo escribió esta epístola para que los cristianos fueran más conscientes de las riquezas que tienen en Cristo y para motivarles a aprovechar estos recursos espirituales en la vida diaria.</p>',
            'temas_estructura' => '<p>La primera mitad de Efesios enumera las posesiones celestiales del creyente en Cristo Jesús: la adopción, la redención, la herencia, el poder, la vida, la gracia, la ciudadanía y el amor de Cristo. No hay imperativos en los capítulos 1-3, que se centran en los dones divinos para el creyente. Pero los capítulos 4-6 incluyen treinta y cinco directivas que hablan de la responsabilidad de los creyentes de comportarse según su vocación. Así, las dos divisiones principales del libro son: la posición del cristiano (caps. 1-3), y la práctica del cristiano (caps. 4-6).
</p><p>
La maravillosa noticia de la salvación en Efesios se dirige a la meta de "la alabanza de su gloria" (1:6, 12, 14). La palabra "gloria" aparece ocho veces y se refiere a la excelencia extrema del amor de Dios, su sabiduría y su poder. La gloria de Dios se revela particularmente en Su compromiso de construir una iglesia gloriosa, madura y que ministre, "sin mancha ni arruga" (5:27).
</p><p>
El carácter "celestial" de la vocación del creyente se destaca en Efesios (1:3). Aunque antes estaba muerto en el pecado, el cristiano ha resucitado con Cristo y se ha sentado con Él en los "lugares celestiales" (2:6). Esta vocación "celestial", a su vez, proporciona los medios y el poder de la vida de obediencia del creyente en la tierra (4:1, 7-10).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/eph/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'Estudio y análisis del libro de Filipenses',
                'description' => 'Encuentra aliento en la alegría y la gratitud de Pablo, incluso en el sufrimiento, destacando la humildad y exaltación de Cristo como modelo a seguir.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Filipenses',
                'abreviatura' => 'Filip.',
                'abreviatura_online' => 'philip',
                'num_capitulos' => 4,
                'palabra_clave' => 'El vivir es Cristo',
                'concepto_principal' => 'La humildad de Cristo el Siervo',
                'autor' => 'Pablo',
            'autor_why' => '<p>Esta carta se identifica claramente como escrita por Pablo (1:1), y la autoría paulina nunca se ha cuestionado seriamente. Sin embargo, se ha debatido con frecuencia y vigor la fecha y el lugar de redacción.</p>',
                'f_redaccion' => '~60 DC',
            'fecha_redaccion_why' => '<p>La opinión tradicional ha sido que Pablo escribió Filipenses entre el 61 y el 63 d.C. desde su encarcelamiento en Roma. Las referencias a la guardia del palacio (1:13) y a la casa del César (4:22) encajan con el encarcelamiento romano de Pablo. Además, las declaraciones de Pablo en 1:12-20 y 4:22 sugieren fuertemente que el encarcelamiento fue bastante largo. Por lo tanto, esta carta parece haber sido escrita en algún momento después del comienzo del encarcelamiento de Pablo registrado en Hechos 28.
</p><p>
Sin embargo, recientemente algunos estudiosos han sugerido que Filipenses fue escrito hacia el año 55 d.C. durante el ministerio de Pablo en Éfeso (Hechos 19; 20) o hacia el 56-61 d.C. durante su encarcelamiento en Cesarea (Hechos 24-26). Señalan que los términos "casa del César" y "guardia de palacio" podrían referirse más bien a las autoridades romanas de ciudades provinciales como Éfeso o Cesarea. Los que defienden la idea de Éfeso señalan que los frecuentes viajes entre la prisión de Pablo y Filipos que implican 1:26; 2:19, 23-26; 4:18 sugieren que Pablo estaba más cerca de Filipos de lo que permitiría un encarcelamiento romano.
</p><p>
Sin embargo, hay que tener en cuenta que los Hechos no mencionan un encarcelamiento en Éfeso, que Cesárea estaba mucho más lejos de Filipos que Roma, y que era posible viajar con razonable rapidez entre Roma y Filipos, que estaba situada en la principal vía romana, la Vía Egnatia. Por lo tanto, se prefiere la opinión tradicional de que esta carta fue escrita desde Roma en algún momento entre el 61 y el 63 d. C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Filipenses es la epístola de la alegría y el ánimo en medio de las circunstancias adversas. Pablo expresa libremente su afecto por los cristianos filipinos, aprecia su testimonio y apoyo constantes, y les insta con cariño a centrar sus acciones y pensamientos en la búsqueda de la Persona y el poder de Cristo.</p>',
            'temas_estructura' => '<p>Filipenses es una de las cartas más personales de Pablo. En ella comparte su propia experiencia con Cristo, y su lucha sobre si preferir morir para estar con Cristo o vivir para servir a los filipinos (1:21-26). Los filipenses estaban en su corazón y le apoyaron en su encarcelamiento (1:7), hecho que explica la nota de gratitud que Pablo emite con frecuencia (1:3-11; 2:19-30; 4:10-20).
</p><p>
Filipenses se centra en: El relato de Pablo sobre sus circunstancias actuales (cap. 1), la apelación de Pablo a tener la mente de Cristo (cap. 2), su apelación a tener el conocimiento de Cristo (cap. 3), y su apelación a tener la paz de Cristo (cap. 4).
</p><p>
El tema de la alegría ocupa un lugar destacado en Filipenses. La palabra "alegría" (griego: chara) aparece cinco veces (1:4, 25; 2:2, 29; 4:1) y el verbo "alegrarse" aparece once veces (dos veces en 1:18; 2:17, 18; 4:4; y una vez en 2:28; 3:1 y 4:10). A pesar de sus desagradables circunstancias en la cárcel, Pablo manifiesta una alegre confianza en la provisión de Dios para él personalmente y para los cristianos filipinos.
</p><p>
Pablo exhorta a los filipenses a tener un espíritu de unidad y preocupación mutua adoptando la actitud de humildad (2:1-4), cuyo mayor ejemplo es la encarnación y crucifixión de Cristo (2:5-11). La kenosis o "vaciamiento de sí mismo" de Cristo no significa que renunciara a su deidad esencial, sino que retuvo su gloria preencarnada y restringió voluntariamente el uso de ciertos atributos (como la omnipresencia).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/philip/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            50 => 
            array (
                'id' => 51,
                'title' => 'Estudio y análisis del libro de Colosenses',
                'description' => 'Profundiza en la supremacía y suficiencia de Cristo sobre cualquier principio y poder, y la vida cristiana centrada en él.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Colosenses',
                'abreviatura' => 'Col.',
                'abreviatura_online' => 'col',
                'num_capitulos' => 4,
                'palabra_clave' => 'La preeminencia de Cristo',
                'concepto_principal' => 'El proceso del nuevo nacimiento',
                'autor' => 'Pablo',
            'autor_why' => '<p>El testimonio externo de la autoría paulina de Colosenses es antiguo y consistente. La evidencia interna también es muy buena; no sólo afirma que fue escrito por Pablo (1:1, 23; 4:18), sino que los detalles personales y los estrechos paralelos con Efesios y Filemón refuerzan el caso.
</p><p>
Sin embargo, la autenticidad de esta carta ha sido cuestionada por su vocabulario y su pensamiento. En sus cuatro capítulos, Colosenses utiliza cincuenta y cinco palabras griegas que no aparecen en las demás epístolas de Pablo. La elevada cristología de Colosenses se ha comparado con el concepto posterior de Juan de Cristo como Logos creador (1:15-23; cf. Juan 1:1-18), con la conclusión de que estos conceptos eran demasiado tardíos para la época de Pablo. Además, a veces se argumenta que la herejía colosense es un tipo de gnosticismo predominante en el siglo II d.C.
</p><p>
Debemos reconocer, sin embargo, que Pablo manejaba un amplio vocabulario, y los temas singulares que se abordan en esta carta, en particular la herejía colosiana, explican el vocabulario de la epístola. Además, no hay razón para suponer que Pablo no fuera consciente de la obra de Cristo como Creador, especialmente a la vista de Filipenses 2:5-11. Por último, la información relativa a la herejía colosiana en el capítulo 2 apunta más bien a lo que fue probablemente una forma temprana de gnosticismo, en lugar de un gnosticismo pleno de la variedad del siglo II.</p>',
                'f_redaccion' => '~60 DC',
            'fecha_redaccion_why' => '<p>Pablo escribió esta epístola desde la cárcel, al igual que Efesios, Filipenses y Filemón. Aunque se han sugerido Cesarea y Éfeso como posibles lugares de autoría, el grueso de las pruebas sugiere que Pablo la escribió en el año 60 o 61 d.C. durante su primer encarcelamiento romano (Hechos 28:16-31) y la envió con Tíquico y el esclavo convertido Onésimo a Colosas (4:7-9; cf. Ef 6:21; Filemón 10-12).
</p><p>
Colosas era una ciudad menor a unos cien kilómetros al este de Éfeso, en la región de las siete iglesias asiáticas de Apocalipsis 1-3. Situada en el fértil valle del Lico, en el camino de Éfeso hacia el este, Colosas había sido anteriormente un populoso centro de comercio, pero en la época de Pablo había sido eclipsada en importancia por las ciudades vecinas de Laodicea y Hierápolis. Aparte de esta carta, Colosas no ejerció casi ninguna influencia en la historia de la iglesia primitiva.
</p><p>
El carácter preciso de la herejía colosiana ha sido objeto de debate. La naturaleza de esta herejía sólo puede deducirse de las referencias incidentales de Pablo a ella en su refutación en 2:8-23. Al parecer, era un sistema religioso que combinaba elementos de la especulación griega helenística (2:4, 8-10), el legalismo judío (2:11-17) y el misticismo oriental (2:18-23). Implicaba una visión baja del cuerpo (2:20-23) y probablemente de la naturaleza en su conjunto. Con su énfasis en la importancia de la circuncisión, las regulaciones dietéticas y las observancias rituales, junto con su culto a los ángeles y su preocupación por las experiencias místicas, la herejía colosiana negaba la suficiencia de Cristo, y cualquier intento de encajar a Cristo en un sistema así socavaría su Persona y su obra redentora.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Colosenses es quizás el libro más centrado en Cristo de la Biblia. En él, Pablo subraya la preeminencia de la persona de Cristo y lo completo de la salvación que Él proporciona.</p>',
            'temas_estructura' => '<p>El tema que resuena en Colosenses es la preeminencia y suficiencia de Cristo en todas las cosas. El creyente está completo sólo en Él y no le falta nada porque "en Él habita toda la plenitud de la Divinidad corporalmente" (2:9). La primera parte de la epístola es una exposición de la supremacía de Cristo (caps. 1-2); la segunda parte explica las implicaciones de la supremacía de Cristo en términos de la sumisión del creyente a Cristo el Señor (caps. 3-4).
</p><p>
Sobre todo en la segunda mitad de la epístola, Pablo explora las implicaciones de la unión del creyente con Cristo. La unión del creyente con Cristo en su muerte, resurrección y exaltación es el fundamento sobre el que debe construirse la vida terrenal (3:1-4). A causa de su muerte con Cristo, los cristianos deben considerarse muertos al viejo camino del pecado (3:5-11); a causa de su resurrección con Cristo, los creyentes deben considerarse vivos para Él en la justicia y deben revestirse de las nuevas cualidades que impulsa el amor cristiano (3:12-17).
</p><p>
La nueva vida en Cristo debe manifestarse en las relaciones personales del cristiano. Pablo da instrucciones específicas para los maridos y las esposas, los hijos, los siervos y los amos (3:18-4:1).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/col/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'Estudio y análisis del libro de 1 Tesalonicenses',
                'description' => 'Descubre exhortaciones a vivir en santidad y esperanza ante la venida de Cristo, reconociendo el trabajo y amor de la iglesia temprana.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '1 Tesalonicenses',
                'abreviatura' => '1 Tes.',
                'abreviatura_online' => '1-thes',
                'num_capitulos' => 5,
                'palabra_clave' => 'Preparación santa para la venida',
                'concepto_principal' => 'Arrebatados con Cristo en su venida',
                'autor' => 'Pablo',
                'autor_why' => '<p>La Primera de Tesalonicenses no fue cuestionada como epístola paulina hasta el siglo XIX, cuando los críticos radicales afirmaron que su escaso contenido doctrinal hacía dudar de su autenticidad. Pero la proporción de enseñanza doctrinal en las epístolas de Pablo varía mucho, y 1 Tesalonicenses se escribió para tratar un tema doctrinal concreto: el regreso de Cristo.
</p><p>
El testimonio externo de la autenticidad de 2 Tesalonicenses es aún más fuerte que el de 1 Tesalonicenses. Internamente, el vocabulario, el estilo y el contenido doctrinal apoyan las afirmaciones de 2 Tesalonicenses 1:1 y 3:7 de que fue escrita por Pablo.</p>',
                'f_redaccion' => '~51 DC',
                'fecha_redaccion_why' => '<p>Durante la primera parte de su estancia en Corinto, del año 51 al 52 d.C., Pablo escribió 1 Tesalonicenses. Unos meses más tarde, mientras Pablo seguía en Corinto, recibió noticias de Tesalónica de que su enseñanza sobre el día del Señor había sido malinterpretada por algunos en la iglesia de Tesalónica. Pablo escribió entonces otra epístola, 2 Tesalonicenses, para corregir ciertos malentendidos y seguir animando a la iglesia.
</p><p>
En tiempos de Pablo, Tesalónica era el principal puerto marítimo y la capital de la provincia romana de Macedonia. Esta próspera ciudad estaba situada en la Vía Egnatia, el principal camino desde Roma hacia el este, y estaba a la vista del Monte Olimpo, legendario hogar del panteón griego.
</p><p>
Tesalónica, una ciudad de unos 200.000 habitantes en el siglo I d.C., tenía una población judía considerable, y el monoteísmo ético de la religión judía atrajo a muchos gentiles que se habían desencantado del paganismo griego. Según 1 Tesalonicenses 1:9 y 2:14-16, la mayoría de los conversos de Tesalónica eran gentiles que salieron de la idolatría.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Escribiendo con gratitud y afecto a una iglesia que sólo había visitado brevemente, las epístolas primera y segunda de Pablo a los tesalonicenses ofrecen palabras de aliento a una iglesia fiel pero en apuros, y se centran especialmente en el aliento que ofrece el regreso de Cristo.</p>',
            'temas_estructura' => '<p>Tras la separación forzada de Pablo de los tesalonicenses (Hechos 17:1-9), se preocupó cada vez más por el progreso de su fe. Primera de Tesalonicenses se escribió para elogiar y animar a los creyentes tesalonicenses, que estaban sufriendo persecución, y para ofrecerles consuelo por sus seres queridos que habían muerto en Cristo. El tema de la venida de Cristo se repite a lo largo de la epístola, y 1 Tesalonicenses 4:13-5:11 ofrece uno de los tratamientos más completos del Nuevo Testamento sobre esta verdad crucial. Las dos secciones principales de 1 Tesalonicenses son: Las reflexiones personales de Pablo sobre los tesalonicenses (caps. 1-3), y las instrucciones de Pablo para los tesalonicenses (caps. 4-5).
</p><p>
En cuanto a la doctrina de la Segunda Venida de la que se ocupan ambas epístolas tesalonicenses, 1 Tesalonicenses subraya la inminencia de la venida del Señor, mientras que 2 Tesalonicenses observa que ciertos acontecimientos precederán al final. Así pues, la Escritura presenta el regreso del Señor en términos tanto de señales como de carácter repentino. Algunos cristianos han llegado a la conclusión de que 1 Tesalonicenses habla de un "rapto" de la iglesia que precederá al día final del Señor, mientras que 2 Tesalonicenses habla del juicio de Cristo sobre el mal. Otros cristianos, señalando que la intención principal de Pablo en estas epístolas es resaltar el consuelo que supone para los cristianos la esperanza de la venida del Señor (así como señalar el error de pensar que uno no necesita trabajar debido a la inminencia de la aparición de Cristo), han argumentado que Pablo no presenta una cronología detallada de los últimos tiempos. Más bien, creen que Pablo está destacando tanto la necesidad de estar preparados constantemente para el regreso del Señor como, al mismo tiempo, de ser diligentes en la realización de la obra de Dios en la tierra.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/1-thes/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            52 => 
            array (
                'id' => 53,
                'title' => 'Estudio y análisis del libro de 2 Tesalonicenses',
                'description' => 'Adéntrate en la enseñanza sobre la perseverancia y la rectitud en anticipación a la segunda venida de Cristo, corrigiendo malentendidos sobre el fin de los tiempos.






',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '2 Tesalonicenses',
                'abreviatura' => '2 Tes.',
                'abreviatura_online' => '2-thes',
                'num_capitulos' => 3,
                'palabra_clave' => 'Entendiendo el día del Señor',
                'concepto_principal' => 'El día del Señor aún no ha venido',
                'autor' => 'Pablo',
                'autor_why' => '<p>La Primera de Tesalonicenses no fue cuestionada como epístola paulina hasta el siglo XIX, cuando los críticos radicales afirmaron que su escaso contenido doctrinal hacía dudar de su autenticidad. Pero la proporción de enseñanza doctrinal en las epístolas de Pablo varía mucho, y 1 Tesalonicenses se escribió para tratar un tema doctrinal concreto: el regreso de Cristo.
</p><p>
El testimonio externo de la autenticidad de 2 Tesalonicenses es aún más fuerte que el de 1 Tesalonicenses. Internamente, el vocabulario, el estilo y el contenido doctrinal apoyan las afirmaciones de 2 Tesalonicenses 1:1 y 3:7 de que fue escrita por Pablo.</p>',
                'f_redaccion' => '~51 DC',
                'fecha_redaccion_why' => '<p>Durante la primera parte de su estancia en Corinto, del año 51 al 52 d.C., Pablo escribió 1 Tesalonicenses. Unos meses más tarde, mientras Pablo seguía en Corinto, recibió noticias de Tesalónica de que su enseñanza sobre el día del Señor había sido malinterpretada por algunos en la iglesia de Tesalónica. Pablo escribió entonces otra epístola, 2 Tesalonicenses, para corregir ciertos malentendidos y seguir animando a la iglesia.
</p><p>
En tiempos de Pablo, Tesalónica era el principal puerto marítimo y la capital de la provincia romana de Macedonia. Esta próspera ciudad estaba situada en la Vía Egnatia, el principal camino desde Roma hacia el este, y estaba a la vista del Monte Olimpo, legendario hogar del panteón griego.
</p><p>
Tesalónica, una ciudad de unos 200.000 habitantes en el siglo I d.C., tenía una población judía considerable, y el monoteísmo ético de la religión judía atrajo a muchos gentiles que se habían desencantado del paganismo griego. Según 1 Tesalonicenses 1:9 y 2:14-16, la mayoría de los conversos de Tesalónica eran gentiles que salieron de la idolatría.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Escribiendo con gratitud y afecto a una iglesia que sólo había visitado brevemente, las epístolas primera y segunda de Pablo a los tesalonicenses ofrecen palabras de aliento a una iglesia fiel pero en apuros, y se centran especialmente en el aliento que ofrece el regreso de Cristo.</p>',
            'temas_estructura' => '<p>Tras la separación forzada de Pablo de los tesalonicenses (Hechos 17:1-9), se preocupó cada vez más por el progreso de su fe. Primera de Tesalonicenses se escribió para elogiar y animar a los creyentes tesalonicenses, que estaban sufriendo persecución, y para ofrecerles consuelo por sus seres queridos que habían muerto en Cristo. El tema de la venida de Cristo se repite a lo largo de la epístola, y 1 Tesalonicenses 4:13-5:11 ofrece uno de los tratamientos más completos del Nuevo Testamento sobre esta verdad crucial. Las dos secciones principales de 1 Tesalonicenses son: Las reflexiones personales de Pablo sobre los tesalonicenses (caps. 1-3), y las instrucciones de Pablo para los tesalonicenses (caps. 4-5).
</p><p>
En cuanto a la doctrina de la Segunda Venida de la que se ocupan ambas epístolas tesalonicenses, 1 Tesalonicenses subraya la inminencia de la venida del Señor, mientras que 2 Tesalonicenses observa que ciertos acontecimientos precederán al final. Así pues, la Escritura presenta el regreso del Señor en términos tanto de señales como de carácter repentino. Algunos cristianos han llegado a la conclusión de que 1 Tesalonicenses habla de un "rapto" de la iglesia que precederá al día final del Señor, mientras que 2 Tesalonicenses habla del juicio de Cristo sobre el mal. Otros cristianos, señalando que la intención principal de Pablo en estas epístolas es resaltar el consuelo que supone para los cristianos la esperanza de la venida del Señor (así como señalar el error de pensar que uno no necesita trabajar debido a la inminencia de la aparición de Cristo), han argumentado que Pablo no presenta una cronología detallada de los últimos tiempos. Más bien, creen que Pablo está destacando tanto la necesidad de estar preparados constantemente para el regreso del Señor como, al mismo tiempo, de ser diligentes en la realización de la obra de Dios en la tierra.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/2-thes/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'Estudio y análisis del libro de 1 Timoteo',
                'description' => 'Conoce las instrucciones de Pablo a Timoteo sobre la administración de la Iglesia, la sana doctrina y la vida piadosa de los miembros de la iglesia.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '1 Timoteo',
                'abreviatura' => '1 Tim.',
                'abreviatura_online' => '1-tim',
                'num_capitulos' => 6,
                'palabra_clave' => 'Manual de liderazgo',
                'concepto_principal' => 'Cualidades de los líderes en Cristo',
                'autor' => 'Pablo',
            'autor_why' => '<p>Desde principios del siglo XIX, las epístolas pastorales (1 Timoteo, 2 Timoteo y Tito) han sido más atacadas que cualquier otra epístola paulina en cuanto a la cuestión de la autoría. La similitud de estas epístolas exige que sean tratadas como una unidad en cuanto a su autoría.
</p><p>
Las pruebas externas apoyan la autoría paulina. Los padres de la iglesia postapostólica, como Policarpo y Clemente de Roma, aluden a ellas, y estas epístolas se identifican como paulinas desde la época de Ireneo y Tertuliano. Entre las epístolas paulinas, sólo Romanos y 1 Corintios tienen mejor atestación.
</p><p>
Sin embargo, algunos estudiosos consideran que estas cartas son "falsificaciones piadosas" que aparecieron durante el siglo II. Las razones citadas para este punto de vista incluyen ciertas diferencias en el lenguaje, y la suposición de que el orden eclesiástico reflejado en las Pastorales refleja un período posterior a la vida de Pablo. Aunque hay diferencias entre las Pastorales y las otras epístolas paulinas, estas diferencias se explican adecuadamente por el hecho de que las otras epístolas fueron escritas a iglesias, mientras que las Pastorales fueron escritas a individuos. Algunas diferencias lingüísticas pueden deberse a que Pablo utilizó un amanuense (secretario), posiblemente Lucas, o simplemente al hecho de que la diversidad de temas produce diversidad de vocabulario. Además, la suposición de que estos libros son falsificaciones implica que el supuesto autor/compilador fue deliberadamente engañoso, y estos volúmenes difieren notablemente de los escritos que conocemos como postapostólicos y pseudoepigráficos. Por último, estas cartas no abordan problemas comunes del siglo II, como el gnosticismo.</p>',
                'f_redaccion' => '~65 DC',
            'fecha_redaccion_why' => '<p>En estas epístolas, Pablo escribe a Timoteo, que se había convertido en su estrecho colaborador en el segundo viaje misionero (Hechos 16:1-3). Sobre la base de la reconstrucción histórica que se expone a continuación, 1 Timoteo se escribió hacia el año 63 d.C. y 2 Timoteo hacia el año 67 d.C.
</p><p>
La autoría paulina de las Epístolas Pastorales requiere la liberación de Pablo de su prisión romana (Hechos 28), la continuación de sus esfuerzos misioneros y su encarcelamiento por segunda vez en Roma. Lamentablemente, el orden de los acontecimientos sólo puede reconstruirse a partir de indicios, ya que no existe ninguna historia como el libro de los Hechos que cubra los últimos años del apóstol. La siguiente reconstrucción es, por tanto, sólo tentativa.
</p><p>
Tal y como había previsto (Fil. 1:19, 25, 26; 2:24), Pablo fue liberado de su primera prisión romana (c. 63 d. C.). En cumplimiento de su promesa a los filipinos (Fil. 2:19-23), envió a Timoteo a Filipos para que les contara las buenas noticias. Pablo mismo fue a Éfeso (a pesar de su expectativa anterior en Hechos 20:38) y a otras iglesias asiáticas como Colosas (véase Filemón 22). Cuando Timoteo se reunió con él en Éfeso, Pablo ordenó a su ayudante que "se quedara en Éfeso" (1 Tim. 1:3) mientras él viajaba a Macedonia. Cuando vio que podría retrasarse en Macedonia, Pablo escribió 1 Timoteo (hacia el año 63 d.C.), quizá desde Filipos (1 Timoteo 3:14, 15). Después de ver a Timoteo en Éfeso, el apóstol viajó a la isla de Creta, donde, tras un período de ministerio, dejó a Tito para que continuara la obra (Tito 1:5). Desde Corinto, Pablo escribió su epístola a Tito (c. 63 d.C.) porque Zenas y Apolos estaban haciendo un viaje que les llevaría por Creta (Tito 3:13). Indicó a Tito que se reuniera con él en Nicópolis tras la llegada de su sustituto a Creta (Tito 3:12).</p>',
                'descripcion' => '',
                'introduccion' => '<p>En 1 y 2 Timoteo, el anciano y experimentado apóstol Pablo escribe a su mucho más joven protegido Timoteo, un joven pastor que se enfrenta a grandes responsabilidades. Las cartas de Pablo animan a Timoteo en su ministerio y le dan instrucciones detalladas sobre la organización y la vida de la iglesia.</p>',
            'temas_estructura' => '<p>En su primera carta a Timoteo, Pablo trata de guiar a su ayudante más joven y menos experimentado, Timoteo, en su pesada responsabilidad como supervisor de la obra en Éfeso y otras ciudades asiáticas. Escribe, en efecto, un desafío a Timoteo para que cumpla la tarea que tiene ante sí: combatir la falsa enseñanza con la sana doctrina, desarrollar un liderazgo cualificado, enseñar la Palabra de Dios y fomentar la conducta cristiana. Debido al carácter personal y conversacional de esta carta, está estructurada de forma imprecisa en torno a cinco claros cargos que terminan cada sección (1:18-20; 3:14-16; 4:11-16; 5:21-25; 6:20, 21). Estas secciones tratan de: la doctrina (cap. 1), el culto público (caps. 2-3), el peligro de los falsos maestros (cap. 4), la disciplina de la iglesia (cap. 5) y los motivos pastorales (cap. 5).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/1-tim/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            54 => 
            array (
                'id' => 55,
                'title' => 'Estudio y análisis del libro de 2 Timoteo',
                'description' => 'Descubre el llamado de Pablo a Timoteo para perseverar en la fe y la enseñanza frente a la adversidad, destacando la importancia de las Escrituras.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => '2 Timoteo',
                'abreviatura' => '2 Tim.',
                'abreviatura_online' => '2-tim',
                'num_capitulos' => 4,
                'palabra_clave' => 'Perseverancia en el ministerio',
                'concepto_principal' => 'Claves para un exitoso ministerio',
                'autor' => 'Pablo',
            'autor_why' => '<p>Desde principios del siglo XIX, las epístolas pastorales (1 Timoteo, 2 Timoteo y Tito) han sido más atacadas que cualquier otra epístola paulina en cuanto a la cuestión de la autoría. La similitud de estas epístolas exige que sean tratadas como una unidad en cuanto a su autoría.
</p><p>
Las pruebas externas apoyan la autoría paulina. Los padres de la iglesia postapostólica, como Policarpo y Clemente de Roma, aluden a ellas, y estas epístolas se identifican como paulinas desde la época de Ireneo y Tertuliano. Entre las epístolas paulinas, sólo Romanos y 1 Corintios tienen mejor atestación.
</p><p>
Sin embargo, algunos estudiosos consideran que estas cartas son "falsificaciones piadosas" que aparecieron durante el siglo II. Las razones citadas para este punto de vista incluyen ciertas diferencias en el lenguaje, y la suposición de que el orden eclesiástico reflejado en las Pastorales refleja un período posterior a la vida de Pablo. Aunque hay diferencias entre las Pastorales y las otras epístolas paulinas, estas diferencias se explican adecuadamente por el hecho de que las otras epístolas fueron escritas a iglesias, mientras que las Pastorales fueron escritas a individuos. Algunas diferencias lingüísticas pueden deberse a que Pablo utilizó un amanuense (secretario), posiblemente Lucas, o simplemente al hecho de que la diversidad de temas produce diversidad de vocabulario. Además, la suposición de que estos libros son falsificaciones implica que el supuesto autor/compilador fue deliberadamente engañoso, y estos volúmenes difieren notablemente de los escritos que conocemos como postapostólicos y pseudoepigráficos. Por último, estas cartas no abordan problemas comunes del siglo II, como el gnosticismo.</p>',
                'f_redaccion' => '~65 DC',
            'fecha_redaccion_why' => '<p>En estas epístolas, Pablo escribe a Timoteo, que se había convertido en su estrecho colaborador en el segundo viaje misionero (Hechos 16:1-3). Sobre la base de la reconstrucción histórica que se expone a continuación, 1 Timoteo se escribió hacia el año 63 d.C. y 2 Timoteo hacia el año 67 d.C.
</p><p>
La autoría paulina de las Epístolas Pastorales requiere la liberación de Pablo de su prisión romana (Hechos 28), la continuación de sus esfuerzos misioneros y su encarcelamiento por segunda vez en Roma. Lamentablemente, el orden de los acontecimientos sólo puede reconstruirse a partir de indicios, ya que no existe ninguna historia como el libro de los Hechos que cubra los últimos años del apóstol. La siguiente reconstrucción es, por tanto, sólo tentativa.
</p><p>
Tal y como había previsto (Fil. 1:19, 25, 26; 2:24), Pablo fue liberado de su primera prisión romana (c. 63 d. C.). En cumplimiento de su promesa a los filipinos (Fil. 2:19-23), envió a Timoteo a Filipos para que les contara las buenas noticias. Pablo mismo fue a Éfeso (a pesar de su expectativa anterior en Hechos 20:38) y a otras iglesias asiáticas como Colosas (véase Filemón 22). Cuando Timoteo se reunió con él en Éfeso, Pablo ordenó a su ayudante que "se quedara en Éfeso" (1 Tim. 1:3) mientras él viajaba a Macedonia. Cuando vio que podría retrasarse en Macedonia, Pablo escribió 1 Timoteo (hacia el año 63 d.C.), quizá desde Filipos (1 Timoteo 3:14, 15). Después de ver a Timoteo en Éfeso, el apóstol viajó a la isla de Creta, donde, tras un período de ministerio, dejó a Tito para que continuara la obra (Tito 1:5). Desde Corinto, Pablo escribió su epístola a Tito (c. 63 d.C.) porque Zenas y Apolos estaban haciendo un viaje que les llevaría por Creta (Tito 3:13). Indicó a Tito que se reuniera con él en Nicópolis tras la llegada de su sustituto a Creta (Tito 3:12).</p>',
                'descripcion' => '',
                'introduccion' => '<p>En 1 y 2 Timoteo, el anciano y experimentado apóstol Pablo escribe a su mucho más joven protegido Timoteo, un joven pastor que se enfrenta a grandes responsabilidades. Las cartas de Pablo animan a Timoteo en su ministerio y le dan instrucciones detalladas sobre la organización y la vida de la iglesia.</p>',
            'temas_estructura' => '<p>En su primera carta a Timoteo, Pablo trata de guiar a su ayudante más joven y menos experimentado, Timoteo, en su pesada responsabilidad como supervisor de la obra en Éfeso y otras ciudades asiáticas. Escribe, en efecto, un desafío a Timoteo para que cumpla la tarea que tiene ante sí: combatir la falsa enseñanza con la sana doctrina, desarrollar un liderazgo cualificado, enseñar la Palabra de Dios y fomentar la conducta cristiana. Debido al carácter personal y conversacional de esta carta, está estructurada de forma imprecisa en torno a cinco claros cargos que terminan cada sección (1:18-20; 3:14-16; 4:11-16; 5:21-25; 6:20, 21). Estas secciones tratan de: la doctrina (cap. 1), el culto público (caps. 2-3), el peligro de los falsos maestros (cap. 4), la disciplina de la iglesia (cap. 5) y los motivos pastorales (cap. 5).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/2-tim/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            55 => 
            array (
                'id' => 56,
                'title' => 'Estudio y análisis del libro de Tito',
                'description' => 'Explora las instrucciones de Pablo sobre el llamamiento de los líderes de la Iglesia y la promoción de vidas de integridad y buenas obras entre los miembros.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Tito',
                'abreviatura' => 'Tito',
                'abreviatura_online' => 'titus',
                'num_capitulos' => 3,
                'palabra_clave' => 'Manual de vida eclesiástica',
                'concepto_principal' => 'Claves del hermanamiento',
                'autor' => 'Pablo',
            'autor_why' => '<p>La autoría paulina de las Epístolas Pastorales (1 y 2 Timoteo y Tito) ha sido objeto de controversia en la época moderna. Sin embargo, los argumentos a favor de la autoría paulina de estas epístolas son sustanciales, y la alternativa de considerarlas como "falsificaciones piadosas" no es recomendable.</p>',
                'f_redaccion' => '~66 DC',
                'fecha_redaccion_why' => '<p>Aunque hay que reconstruir una cronología a partir de los comentarios incidentales de las Epístolas Pastorales, parece que el libro de Tito fue escrito hacia el año 63 d.C., después de la liberación de Pablo de la prisión romana descrita en Hechos 28 y poco después de la composición de 1 Timoteo. Véase Fecha de 1 y 2 Timoteo para una cronología más detallada de la vida de Pablo después del cierre del libro de los Hechos.
</p><p>
La isla mediterránea de Creta tiene 156 millas de largo y hasta 30 millas de ancho. Sus habitantes del primer siglo eran famosos por su falsedad e inmoralidad (1:12, 13) y la expresión "hacerse el cretense" se convirtió en un modismo que significa "hacerse el mentiroso". Varios judíos de Creta estaban presentes en Jerusalén el día de Pentecostés (Hechos 2:11) y es posible que algunos de ellos creyeran en Cristo e introdujeran el evangelio en su país. Aunque Pablo naufragó en Creta durante su viaje a Roma (Hechos 27:7-13), probablemente tuvo poco tiempo para el ministerio activo durante esa breve estancia. El apóstol difundió el evangelio en las ciudades de Creta tras su liberación de la prisión romana y dejó allí a Tito para que terminara de organizar las iglesias (1:5).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Al igual que 1 Timoteo, Tito fue escrita por Pablo a un asociado que trabajaba como representante apostólico de Pablo. Esta breve carta se centra en el papel y la responsabilidad de Tito en la organización y supervisión de las iglesias de la isla de Creta.</p>',
            'temas_estructura' => '<p>No mucho después de la salida de Pablo de Creta, escribió esta carta para animar y ayudar a Tito en su tarea de organizar las iglesias. Hace hincapié en la sana doctrina y advierte contra los que distorsionan la verdad, pero también es un manual de conducta que hace hincapié en las buenas acciones y en la conducta adecuada de los distintos grupos dentro de las iglesias. Esta epístola se divide en dos secciones principales: nombrar a los ancianos (cap. 1), y poner las cosas en orden (cap. 2, 3).
</p><p>
En las instrucciones de Pablo subyace el tema de que Cristo está construyendo su iglesia, eligiendo cuidadosamente las piedras que componen esta morada para Dios. La deidad y la obra redentora de Cristo se afirman bellamente en 2:13, 14, y Pablo presenta la Segunda Venida de Cristo como un incentivo para la vida santa (2:12, 13).
</p><p>
Los hombres y las mujeres, los jóvenes y los ancianos, tienen cada uno sus funciones vitales que cumplir en la iglesia si han de ser ejemplos vivos de la doctrina que profesan. A lo largo de su carta a Tito, Pablo insiste en la necesaria y práctica realización de la salvación en la vida diaria tanto de los ancianos como de las congregaciones.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/titus/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            56 => 
            array (
                'id' => 57,
                'title' => 'Estudio y análisis del libro de Filemón',
                'description' => 'Conoce la carta de Pablo a Filemón, en que le insta a tratar fraternalmente a Onésimo, a quien le regresa no como esclavo, sino como hermano en la fe





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Filemón',
                'abreviatura' => 'Filem.',
                'abreviatura_online' => 'philem',
                'num_capitulos' => 1,
                'palabra_clave' => 'Redención de la esclavitud',
                'concepto_principal' => 'Libertad a través del amor y el perdón',
                'autor' => 'Pablo',
            'autor_why' => '<p>El consenso general de los estudiosos reconoce que Filemón es obra de Pablo. No pudo haber ningún motivo doctrinal para su falsificación, y está apoyado externamente por una tradición consistente e internamente por no menos de tres referencias a Pablo (vv. 1, 9, 19).</p>',
                'f_redaccion' => '~60 DC',
            'fecha_redaccion_why' => '<p>Filemón es una de las cuatro "Epístolas de la Cárcel" (Efesios, Filipenses y Colosenses eran las otras). Fue escrita en el año 60 ó 61 d.C. y enviada al mismo tiempo que Colosenses, durante el primer encarcelamiento romano de Pablo. Filemón 22 refleja la esperanza de Pablo de ser liberado del cautiverio.
</p><p>
Reconstruyendo el trasfondo de esta carta, parece que un esclavo llamado Onésimo había agraviado a su amo y escapó a Roma, donde encontró relativa seguridad entre las masas. De alguna manera, Onésimo entró en contacto con Pablo, quien lo condujo a Cristo. Sabiendo que Onésimo tenía la responsabilidad de volver a Filemón, Pablo lo envió de vuelta con Tíquico a Colosas llevando la epístola a Filemón.
</p><p>
Filemón era un residente de Colosas y un converso de Pablo (v. 19), quizás a través de un encuentro con Pablo en Éfeso durante el tercer viaje misionero de Pablo. La casa de Filemón era lo suficientemente grande como para servir de lugar de reunión para la iglesia allí (v. 2). Era benévolo con otros creyentes (vv. 5-7), y su hijo Arquipo evidentemente ocupaba una posición de liderazgo en la iglesia (Col. 4:17; Filemón 2). Es posible que Filemón tuviera otros esclavos además de Onésimo, y no era el único dueño de esclavos entre los creyentes colosenses (Col. 4:1). Por lo tanto, esta carta proporcionó directrices para otras relaciones entre amo y esclavo.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Con tan sólo 334 palabras en el texto griego, ésta, la más breve de las epístolas de Pablo, es un modelo de cortesía, discreción y preocupación amorosa por el perdón de quien, de otro modo, se enfrentaría a graves consecuencias.</p>',
            'temas_estructura' => '<p>Esta carta, llena de tacto y muy personal, puede dividirse en tres partes: oración de agradecimiento por Filemón (vv. 1-7); petición de Pablo por Onésimo (vv. 8-16); y promesa de Pablo a Filemón (vv. 17-25).
</p><p>
La epístola de Pablo a Filemón es un testimonio del poder de la gracia de Dios en Cristo Jesús y del amor cristiano que une a los creyentes. Aunque antes era un ladrón y un esclavo fugitivo, Onésimo, el esclavo de Filemón, había sido transformado por la gracia de Dios y ahora era un "hermano amado" de Filemón (v. 16).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/philem/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            57 => 
            array (
                'id' => 58,
                'title' => 'Estudio y análisis del libro de Hebreos',
                'description' => 'Descubre por qué Cristo es superior a los ángeles, a Moisés y al sacerdocio aarónico, y cómo es Jesús el mediador de un nuevo y mejor pacto.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 8,
                'nombre' => 'Hebreos',
                'abreviatura' => 'Heb.',
                'abreviatura_online' => 'heb',
                'num_capitulos' => 13,
                'palabra_clave' => 'La superioridad de Cristo',
                'concepto_principal' => 'Los ejemplos supremos de la fe',
                'autor' => 'Pablo',
            'autor_why' => '<p>A pesar de muchas sugerencias, el autor de Hebreos sigue siendo desconocido. Clemente de Alejandría (c. 150-215 d.C.) nombró a Pablo como autor, pero sostuvo que Lucas tradujo el libro al griego. Orígenes (c. 185-253 d.C.) llegó a la conclusión de que los pensamientos eran de Pablo, pero que la fraseología y la composición eran de alguien que recordaba las enseñanzas del apóstol (por ejemplo, Clemente de Roma o Lucas). Se han propuesto muchos otros como posibles autores: Bernabé (sugerido por Tertuliano), Apolos (por Lutero), Felipe el evangelista (por William Ramsay), y Priscila y Aquila (por Adolf von Harnack). La famosa observación de Orígenes sigue vigente: "Quién es el autor de la epístola, sólo Dios lo sabe".</p>',
                'f_redaccion' => '~65 DC',
            'fecha_redaccion_why' => '<p>Se desconoce el lugar de redacción, pero se puede hacer una estimación razonable de la fecha. Clemente de Roma citó Hebreos hacia el año 95 d.C., pero el hecho de que no mencione el cese del sistema de sacrificios del Antiguo Testamento con la destrucción de Jerusalén en el año 70 d.C. indica que fue escrito antes de esa fecha. Timoteo aún vivía (12:23), la persecución iba en aumento y el antiguo sistema judío estaba a punto de desaparecer (12:26, 27). Todo esto sugiere una fecha entre el 64 y el 68 d.C.
</p><p>
Los destinatarios de esta obra eran creyentes (3:1) que habían llegado a la fe por el testimonio de los testigos oculares de Cristo (2:3). Habían soportado dificultades a causa de su defensa del Evangelio (10:32-34), pero estaban en peligro de alejarse. Los repetidos argumentos relativos a la superioridad de Cristo y su sacrificio sobre Moisés y el sistema de sacrificios del Antiguo Testamento indican que los destinatarios eran probablemente cristianos judíos en peligro de volver a caer en la religión judía.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Hebreos es una obra única entre las epístolas del Nuevo Testamento por su estilo y enfoque, y es el único libro del Nuevo Testamento cuya autoría sigue siendo un verdadero misterio. Esta profunda obra defiende la superioridad de Cristo mediante un argumento acumulativo en el que se presenta a Cristo como "mejor" en todos los aspectos.</p>',
            'temas_estructura' => '<p>El autor llama a su libro "palabra de exhortación" (13:22), lo que hace que muchos lo consideren más un sermón escrito que una carta. En realidad, Hebreos es una extensa exposición de numerosos pasajes del Antiguo Testamento, y el autor se basó en la Septuaginta (la traducción griega del Antiguo Testamento) para sus citas. Después de utilizar el Antiguo Testamento para demostrar la superioridad de la persona de Cristo (1:1-4:13) y la superioridad de la obra de Cristo (4:14-10:18), el escritor aplica estas verdades de forma práctica para mostrar la superioridad del camino de fe del cristiano (10:19-13:25).
</p><p>
El tema básico de Hebreos se encuentra en la palabra "mejor", que describe la superioridad de Cristo en Su Persona y obra (1:4; 6:9; 7:7, 19, 22; 8:6; 9:23; 10:34; 11:16, 35, 40; 12:24). Las palabras "perfecto" y "celestial" también son prominentes. Él ofrece una mejor revelación, posición, sacerdocio, pacto, sacrificio y poder.
</p><p>
Hebreos presenta a Cristo como Profeta, Sacerdote y Rey divino-humano. Su deidad (1:3, 8) y su humanidad (2:9, 14, 17, 18) se afirman con la misma fuerza, y se utilizan más de veinte títulos para describir sus atributos y logros (por ejemplo, "heredero de todas las cosas", "Apóstol y Sumo Sacerdote", "Mediador" y "Autor y Consumador de nuestra fe").</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/heb/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            58 => 
            array (
                'id' => 59,
                'title' => 'Estudio y análisis del libro de Santiago',
                'description' => 'Obtén enseñanzas prácticas sobre la fe que actúa, la paciencia en el sufrimiento y la importancia de la humildad y la integridad moral.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => 'Santiago',
                'abreviatura' => 'Stg.',
                'abreviatura_online' => 'james',
                'num_capitulos' => 5,
                'palabra_clave' => 'La fe que obra',
                'concepto_principal' => 'Respuestas ante prueba y tentación',
                'autor' => 'Santiago',
            'autor_why' => '<p>El autor de esta carta se identifica simplemente como Santiago, "siervo de Dios y del Señor Jesucristo" (1:1). El nombre era bastante común; y el Nuevo Testamento enumera al menos cinco hombres llamados "Santiago", dos de los cuales eran discípulos de Jesús y uno de los cuales era su hermano. La tradición ha atribuido el libro a Santiago, el hermano del Señor, y hay pocas razones para cuestionar esta opinión, ya que el lenguaje de la epístola es algo similar al discurso de Santiago en Hechos 15.
</p><p>
Este Santiago se menciona dos veces en los Evangelios (Mateo 13:55; Marcos 6:3), ambas como uno de los hermanos de Jesús. Aunque no se le llama seguidor del Señor hasta después de la resurrección, probablemente estaba entre los discípulos que obedecieron la orden de Jesús de esperar en el Cenáculo y que fueron allí llenos del Espíritu Santo (Hechos 1:14; 2:4). Cuando Pedro dejó Palestina (Hechos 12:17), Santiago parece haberse convertido en el líder de la iglesia de Jerusalén.
</p><p>
Se ha argumentado que el griego de esta epístola es demasiado sofisticado para un galileo como Santiago, pero esto supone que nunca tuvo la oportunidad o la aptitud para desarrollar un dominio del griego koiné ("común"). Como líder eclesiástico prominente, le habría convenido dominar la lengua universal del Imperio Romano.</p>',
                'f_redaccion' => '~60 DC',
            'fecha_redaccion_why' => '<p>Según el historiador judío Josefo, Santiago fue martirizado en el año 62 d.C. Los que lo aceptan como autor de esta epístola han propuesto una fecha de redacción que oscila entre el 45 d. C. y el final de su vida. Sin embargo, varios factores indican que éste puede ser el primer escrito del Nuevo Testamento (c. 46-49 d.C.): (1) no se menciona a los creyentes gentiles ni su relación con los cristianos judíos; (2) las alusiones a las enseñanzas de Cristo tienen tan poca concordancia verbal con los Evangelios Sinópticos que Santiago probablemente es anterior a la composición de los Evangelios; (3) Santiago utiliza el término griego para "sinagoga" en 2:2 (RVA: "asamblea") además del término "iglesia" (5:14), indicando así una organización eclesiástica muy sencilla de ancianos y maestros (3:1; 5:14) que seguía el modelo de la sinagoga judía; y (4) Santiago no menciona las cuestiones implicadas en el Concilio de Jerusalén de Hechos 15 (A.D. 49).</p>',
                'descripcion' => '',
                'introduccion' => '<p>La fe sin obras no puede llamarse fe. La fe sin obras está muerta, y una fe muerta es peor que no tener fe. La fe debe obrar; debe producir; el mero asentimiento mental es insuficiente. A lo largo de su epístola a los creyentes judíos, Santiago integra la verdadera fe y la experiencia práctica cotidiana al subrayar que la verdadera fe debe manifestarse en obras de fe.</p>',
            'temas_estructura' => '<p>Santiago es el Proverbios del Nuevo Testamento porque está escrito en el estilo escueto y moralista de la literatura sapiencial. Es evidente que Santiago estuvo profundamente influenciado por el Antiguo Testamento, así como por las enseñanzas de Jesús. A causa de los numerosos temas de esta epístola, es difícil hacer un esquema. El esquema utilizado aquí es: la prueba de la fe (1:1-18); las características de la fe (1:19-5:6); y el triunfo de la fe (5:7-20).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/james/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            59 => 
            array (
                'id' => 60,
                'title' => 'Estudio y análisis del libro de 1 Pedro',
                'description' => 'Encuentra consejos para vivir con esperanza y resistir el sufrimiento, manteniendo una conducta ejemplar que refleje la fe en Cristo.',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => '1 Pedro',
                'abreviatura' => '1 Pe.',
                'abreviatura_online' => '1-pet',
                'num_capitulos' => 5,
                'palabra_clave' => 'Padecer por la causa de Cristo',
                'concepto_principal' => 'Cómo enfrentar la persecución',
                'autor' => 'Pedro',
                'autor_why' => '<p>Algunos estudiosos han dudado de que Pedro escribiera esta carta. Afirman que el buen estilo literario y el extenso vocabulario del autor no podían proceder de un pescador galileo. Sin embargo, hay razones de peso para creer que Pedro es el autor. La epístola contiene referencias a la vida y las enseñanzas de Jesús. Los estudiosos también han señalado similitudes entre 1 Pedro y los discursos de Pedro en los Hechos. Primera de Pedro también tiene similitudes con el Evangelio de Marcos, que puede haberse basado en la predicación de Pedro en Roma.
</p><p>
El escriba de Pedro, Silvano (5:12), puede haber sido responsable de gran parte del estilo y el vocabulario. Probablemente aplicó sus habilidades editoriales para transmitir el mensaje, la personalidad y la autoridad apostólica del apóstol Pedro.</p>',
                'f_redaccion' => '~65 DC',
            'fecha_redaccion_why' => '<p>Esta epístola fue escrita desde "Babilonia" (5:13), pero los estudiosos están divididos en cuanto a si esto se refiere literalmente a Babilonia en Mesopotamia o simbólicamente a Roma. No hay tradición de que Pedro fuera a Babilonia, y en su época estaba prácticamente desierta. Por otra parte, la tradición indica sistemáticamente que Pedro pasó los últimos años de su vida en Roma. Como centro de idolatría, el término "Babilonia" era una designación figurativa apropiada para Roma (cf. Ap. 17; 18). Pedro utilizó otras expresiones figurativas en esta epístola, y no es de extrañar que hiciera lo mismo con Roma. Su mención de Marcos (5:13) también se ajusta a esta opinión, porque Marcos estuvo en Roma durante el primer encarcelamiento de Pablo (Col. 4:10). Esta epístola fue escrita probablemente poco antes del estallido de la persecución bajo Nerón en el año 64 d.C.
</p><p>
Esta carta se dirige "a los peregrinos de la Dispersión" (1:1), término que podría indicar que los destinatarios eran cristianos judíos. Por otra parte, los destinatarios también se describen en términos más apropiados para los conversos gentiles (1:14, 18; 2:9, 10), y la mayoría de los estudiosos creen que eran predominantemente cristianos gentiles en iglesias de toda Asia Menor.
</p><p>
Del contenido de la carta se desprende que la hostilidad y la sospecha iban en aumento contra los cristianos en el imperio, y que eran vilipendiados y maltratados por su estilo de vida y por hablar de otro reino. El cristianismo aún no había recibido la prohibición oficial de Roma, pero el escenario estaba preparado para una severa persecución y martirio en un futuro cercano.</p>',
                'descripcion' => '',
                'introduccion' => '<p>La primera epístola de Pedro se dirige a los cristianos que se enfrentan a la persecución por su fe. Como consuelo, Pedro les recuerda su herencia celestial y les anima a vivir una vida de sumisión a la voluntad de Dios.</p>',
            'temas_estructura' => '<p>La carta procede lógicamente a través de los temas de la salvación del creyente (1:1-2:12); la sumisión del creyente (2:13-3:12); y el sufrimiento del creyente (3:13-5:14).
</p><p>
El tema básico de 1 Pedro es la respuesta adecuada al sufrimiento cristiano. Sabiendo que sus lectores se enfrentarán a más persecuciones que nunca, Pedro escribe esta carta para darles una perspectiva divina sobre estas pruebas, de modo que puedan soportarlas sin vacilar en su fe.
</p><p>
Esta epístola presenta a Cristo como ejemplo y esperanza del creyente en tiempos de sufrimiento. El sufrimiento de Cristo es un ejemplo de lo que sus seguidores pueden enfrentar por hacer lo correcto; el sufrimiento personal por la fe es también un medio por el cual el cristiano puede compartir la mente de Cristo (4:1).
</p><p>
Pedro habla de las relaciones del creyente en el mundo y apela a una actitud de sumisión como el camino de Cristo hacia la armonía y la verdadera libertad. La sumisión por causa del Señor a los que tienen autoridad gubernamental, social y familiar fomentará un buen testimonio ante los de fuera.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/1-pet/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            60 => 
            array (
                'id' => 61,
                'title' => 'Estudio y análisis del libro de 2 Pedro',
                'description' => 'Descubre las advertencias contra falsos maestros y exhortaciones para crecer en la fe y el conocimiento de Jesucristo, antes de su segunda venida.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => '2 Pedro',
                'abreviatura' => '2 Pe.',
                'abreviatura_online' => '2-pet',
                'num_capitulos' => 3,
                'palabra_clave' => 'Guardaos de los falsos maestros',
                'concepto_principal' => 'La naturaleza de la revelación de Dios',
                'autor' => 'Pedro',
                'autor_why' => '<p>Algunos estudiosos han dudado de que Pedro fuera el autor de 2 Pedro. Suelen señalar las diferencias de estilo, vocabulario y teología entre 1 y 2 Pedro. Además, las pruebas externas de 2 Pedro son más débiles que las de cualquier otro libro del Nuevo Testamento, y su canonicidad fue discutida hasta el siglo IV d.C. Asimismo, muchos argumentan que 2 Pedro se enfrenta al problema de los maestros gnósticos en la iglesia, una amenaza que data de un periodo posterior a la vida de Pedro. Por último, se argumenta, debido a la aparente relación literaria entre 2 Pedro y Judas, que 2 Pedro dependía de Judas.
</p><p>
No se puede negar que el griego de 1 Pedro es mucho más pulido que el de 2 Pedro. Pero esta diferencia puede explicarse fácilmente si Pedro utilizó un secretario diferente para escribir la segunda epístola. Las diferencias de vocabulario también pueden explicarse, en parte, por la distinta temática de cada carta.
</p><p>
El hecho de que 2 Pedro no tuviera una rápida aceptación se debió quizás a su brevedad y a su aparente lenta circulación entre las iglesias. Este retraso en el reconocimiento significó que 2 Pedro tuvo que competir con varias obras heréticas posteriores que afirmaban haber sido escritas por Pedro (por ejemplo, el Apocalipsis de Pedro), aunque el contraste de 2 Pedro con estas falsificaciones posteriores es sorprendente.
</p><p>
La relación histórica entre 2 Pedro y Judas no está del todo clara. Aunque se argumenta que 2 Pedro cita a Judas y que éste fue escrito después de la muerte de Pedro, es posible que Judas citara a 2 Pedro o que ambos utilizaran una fuente común.
</p><p>
Por último, aunque algunos estudiosos sostienen que la falsa enseñanza mencionada en 2 Pedro era una forma de gnosticismo que surgió después de la época de Pedro, es mejor considerar la falsa enseñanza combatida aquí como un ejemplo de las tendencias que más tarde evolucionaron hacia el gnosticismo propiamente dicho del siglo II.
</p><p>
La alternativa a la autoría petrina es una falsificación posterior hecha en nombre de Pedro. Incluso la afirmación de que 2 Pedro fue escrita por un discípulo de Pedro no puede superar el problema de la falsificación. Además, aunque hay diferencias entre 1 y 2 Pedro, las diferencias son mucho más profundas entre las dos epístolas petrinas y el resto del Nuevo Testamento. De hecho, ningún otro libro se parece tanto a 1 Pedro como 2 Pedro. A pesar de los problemas internos y externos, la posición tradicional de la autoría petrina supera más dificultades que cualquier otra opción.</p>',
                'f_redaccion' => '~65 DC',
            'fecha_redaccion_why' => '<p>Esta epístola fue escrita justo antes de la muerte del apóstol (1:14), y probablemente se originó en Roma. El martirio de Pedro tuvo lugar entre el 64 y el 66 d.C. (si Pedro estuviera vivo en el 67 d.C. cuando Pablo escribió 2 Timoteo durante su segundo encarcelamiento en Roma, es probable que Pablo lo hubiera mencionado).</p>',
                'descripcion' => '',
            'introduccion' => '<p>Pedro escribió su primera epístola para animar a sus lectores a responder adecuadamente a la oposición externa. Su segunda epístola se centra en la oposición interna causada por los falsos maestros, cuyas "herejías destructivas" (2:1) pueden seducir a los creyentes hacia el error y la inmoralidad. Mientras que 1 Pedro habla del nuevo nacimiento a través de la Palabra viva, 2 Pedro insiste en la necesidad de crecer en la gracia y el conocimiento de Cristo. El mejor antídoto contra el error es una comprensión madura de la verdad.</p>',
            'temas_estructura' => '<p>Segunda Pedro se divide en tres partes: el cultivo del carácter cristiano (cap. 1); la condena de los falsos maestros (cap. 2); la confianza en el regreso de Cristo (cap. 3).
</p><p>
Mientras cultivan el carácter cristiano, Pedro insta a sus lectores a crecer en la fe y en el conocimiento de la verdad que se encuentra en la Palabra de Dios. En particular, se subraya el carácter fidedigno de la Escritura, y en 1:21 se ofrece una sorprendente descripción del proceso divino-humano de la inspiración: "pero los santos hombres de Dios hablaron movidos por el Espíritu Santo". También es relevante para nuestra visión de la Escritura el hecho de que Pedro mencione las cartas de "nuestro amado hermano Pablo" y las sitúe al mismo nivel que las Escrituras del Antiguo Testamento (3:15, 16).
</p><p>
La condena de Pedro a los falsos maestros describe su estilo de vida inmoral, la inutilidad y destructividad de sus enseñanzas, y la certeza de su destrucción y juicio por parte de Dios.
</p><p>
El enfoque de Pedro en el próximo día del Señor fue aparentemente impulsado por la negación del falso maestro de que el juicio divino llegaría alguna vez. A la luz del próximo día del Señor, Pedro exhorta a sus lectores a vivir una vida de santidad, constancia y crecimiento.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/2-pet/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            61 => 
            array (
                'id' => 62,
                'title' => 'Estudio y análisis del libro de 1 Juan',
                'description' => 'Explora la esencia del amor divino, la verdadera comunión con Dios y el rechazo de las falsas doctrinas, enfatizando la fe en Jesucristo como el Hijo de Dios.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => '1 Juan',
                'abreviatura' => '1 Juan',
                'abreviatura_online' => '1-jn',
                'num_capitulos' => 5,
                'palabra_clave' => 'Comunión con Dios',
                'concepto_principal' => 'Arrepentimiento y reconciliación',
                'autor' => 'Juan el Amado',
            'autor_why' => '<p>Aunque esta epístola no menciona el nombre de su autor, hay pruebas sólidas que sugieren que fue escrita por Juan, el hijo de Zebedeo y hermano de Santiago (Marcos 1:19, 20). Las fuertes similitudes entre esta carta y el Evangelio de Juan corroboran el testimonio de muchos de los primeros padres de la Iglesia, como Papías, Policarpo e Ireneo, de que ambas obras son producto de Juan, el apóstol de Jesús. Ambas comparten muchas frases distintivas de Juan, y las características de vocabulario limitado y frecuente contraste de opuestos son también comunes a ambas.</p>',
                'f_redaccion' => '~100 DC',
            'fecha_redaccion_why' => '<p>Probablemente, Primera de Juan se escribió en Éfeso después del Evangelio de Juan, pero no se puede fijar la fecha con certeza. No se menciona ninguna persecución, lo que sugiere una fecha anterior al año 95, cuando la persecución estalló cerca del final del reinado del emperador romano Domiciano (81-96 d. C.).</p>',
                'descripcion' => '',
                'introduccion' => '<p>Ya avanzado en años, Juan escribió esta epístola paternal por su preocupación amorosa por sus "hijos", cuya firmeza en la verdad estaba siendo amenazada por la atracción de la mundanalidad y la astucia de los falsos maestros.</p>',
            'temas_estructura' => '<p>Al igual que 2 Pedro y Judas, 1 Juan tiene una orientación negativa y otra positiva: refuta la doctrina errónea y anima a sus lectores a caminar en el conocimiento de la verdad. Juan enumera los criterios y las características de la comunión con Dios y muestra que los que permanecen en Cristo pueden tener confianza y seguridad ante Él. Esta obra, escrita de forma sencilla pero profunda, desarrolla la base de la comunión (1:1-2:27) y el comportamiento de la misma (2:28-5:21).
</p><p>
Un tema importante de 1 Juan es la comunión con Dios (2:28). Juan quiere que sus lectores tengan la seguridad de que Dios mora en ellos a través de su relación permanente con Él. Las frases que enfatizan la certeza cristiana aparecen cinco veces en esta breve epístola.
</p><p>
Contra los falsos maestros que negaban la realidad de la encarnación diciendo que Jesús sólo parecía tener un cuerpo humano, Juan afirma con rotundidad que el Hijo de Dios tomó para sí una naturaleza humana completa y genuina (4:2, 3). La herejía a la que Juan se enfrenta aquí fue un precursor del gnosticismo del siglo II, que enseñaba que la materia es esencialmente mala y el espíritu es esencialmente bueno. Este error dualista hizo que los falsos maestros negaran la encarnación de Cristo. El verdadero Dios, enseñaban, nunca podría habitar un cuerpo material de carne y hueso, y por lo tanto el cuerpo humano que supuestamente poseía Jesús no era real.
</p><p>
Otro tema destacado en esta epístola es el amor: la palabra aparece más de treinta y cinco veces en la epístola. El apóstol utiliza el ejemplo de Caín para ilustrar lo que no es el amor: el odio es el asesinato en espíritu, y surge de la esfera mundana de la muerte. A continuación, Juan utiliza el ejemplo de Cristo para ilustrar lo que es el amor: el amor se practica en la abnegación, no en la mera profesión. Esta expresión práctica de amor resulta en seguridad ante Dios y en oraciones contestadas porque el creyente está caminando en obediencia a los mandatos de Dios de creer en Cristo y amarse unos a otros.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/1-jn/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            62 => 
            array (
                'id' => 63,
                'title' => 'Estudio y análisis del libro de 2 Juan',
                'description' => 'Estudia la exhortación de Juan a permanecer fieles a la enseñanza de Cristo, amándonos unos a otros y evitando el engaño de los falsos maestros.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => '2 Juan',
                'abreviatura' => '2 Juan',
                'abreviatura_online' => '2-jn',
                'num_capitulos' => 1,
                'palabra_clave' => 'No comulgar con los falsos maestros',
                'concepto_principal' => 'Mantener pura la doctrina de Cristo',
                'autor' => 'Juan el Amado',
            'autor_why' => '<p>Tanto en 2 como en 3 Juan, el autor se identifica como "el Anciano". Esto no es un argumento contra la autoría juanina de estas epístolas, ya que el contenido de las mismas revela que su autoridad era mucho mayor que la de un anciano en una iglesia local. El apóstol Pedro también se refirió a sí mismo como anciano (1 Pe. 5:1).
</p><p>
La similitud de estilo, vocabulario, estructura y estado de ánimo entre 2 y 3 Juan deja claro que estas cartas fueron escritas por el mismo autor. Además, ambas (especialmente 2 Juan) guardan un gran parecido con 1 Juan y con el Cuarto Evangelio. Así pues, las pruebas internas apoyan claramente la opinión tradicional de que estas epístolas fueron escritas por el apóstol Juan.</p>',
                'f_redaccion' => '~100 DC',
            'fecha_redaccion_why' => '<p>Los paralelos entre 2 y 3 Juan sugieren que estas epístolas se escribieron más o menos en la misma época (hacia el año 90 d.C.). Los primeros escritores cristianos son unánimes en su testimonio de que la sede del posterior ministerio de Juan estuvo en la ciudad de Éfeso, la principal de la provincia romana de Asia.
</p><p>
La segunda carta de Juan se dirige a una "dama elegida" y a sus hijos. Algunos estudiosos creen que el discurso debe tomarse literalmente para referirse a una mujer específica y a sus hijos, mientras que otros prefieren tomarlo como una descripción figurativa de una iglesia local.
</p><p>
La Tercera de Juan fue ocasionada por los informes de una iglesia asiática de que un hombre llamado Diótrefes se había hecho con el poder, había rechazado a los maestros enviados por Juan y estaba expulsando a los de su iglesia que querían recibirlos.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Aunque se encuentran entre los más breves de la Escritura, estos dos libros de un solo capítulo son de continua relevancia para la iglesia. La Segunda y la Tercera de Juan reflejan circunstancias similares y tienen contenidos parecidos: En cada libro, el autor advierte contra las divisiones de los maestros falsos o interesados, y ofrece estímulo a los creyentes genuinos. En particular, 2 Juan advierte a sus lectores sobre la recepción de herejes en sus hogares o iglesias, mientras que 3 Juan anima a la comunión con los hermanos cristianos.</p>',
            'temas_estructura' => '<p>La segunda carta de Juan tiene mucho en común con la primera, incluida una advertencia sobre el peligro de los falsos maestros que niegan la encarnación de Jesucristo. Juan anima a los lectores a seguir caminando en el amor, pero les exhorta a discernir en su expresión del amor. El libro puede dividirse en dos partes: permanecer en los mandamientos de Dios (vv. 1-6) y no permanecer con los falsos maestros (vv. 7-13).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/2-jn/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            63 => 
            array (
                'id' => 64,
                'title' => 'Estudio y análisis del libro de 3 Juan',
                'description' => 'Descubre consejos sobre la hospitalidad y el apoyo a los misioneros, contrastando ejemplos de conducta buena y mala dentro de la comunidad cristiana.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => '3 Juan',
                'abreviatura' => '3 Juan',
                'abreviatura_online' => '3-jn',
                'num_capitulos' => 1,
                'palabra_clave' => 'Comunión con los hermanos',
                'concepto_principal' => 'Hospitalidad y hermanamiento',
                'autor' => 'Juan el Amado',
            'autor_why' => '<p>Tanto en 2 como en 3 Juan, el autor se identifica como "el Anciano". Esto no es un argumento contra la autoría juanina de estas epístolas, ya que el contenido de las mismas revela que su autoridad era mucho mayor que la de un anciano en una iglesia local. El apóstol Pedro también se refirió a sí mismo como anciano (1 Pe. 5:1).
</p><p>
La similitud de estilo, vocabulario, estructura y estado de ánimo entre 2 y 3 Juan deja claro que estas cartas fueron escritas por el mismo autor. Además, ambas (especialmente 2 Juan) guardan un gran parecido con 1 Juan y con el Cuarto Evangelio. Así pues, las pruebas internas apoyan claramente la opinión tradicional de que estas epístolas fueron escritas por el apóstol Juan.</p>',
                'f_redaccion' => '~100 DC',
            'fecha_redaccion_why' => '<p>Los paralelos entre 2 y 3 Juan sugieren que estas epístolas se escribieron más o menos en la misma época (hacia el año 90 d.C.). Los primeros escritores cristianos son unánimes en su testimonio de que la sede del posterior ministerio de Juan estuvo en la ciudad de Éfeso, la principal de la provincia romana de Asia.
</p><p>
La segunda carta de Juan se dirige a una "dama elegida" y a sus hijos. Algunos estudiosos creen que el discurso debe tomarse literalmente para referirse a una mujer específica y a sus hijos, mientras que otros prefieren tomarlo como una descripción figurativa de una iglesia local.
</p><p>
La Tercera de Juan fue ocasionada por los informes de una iglesia asiática de que un hombre llamado Diótrefes se había hecho con el poder, había rechazado a los maestros enviados por Juan y estaba expulsando a los de su iglesia que querían recibirlos.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Aunque se encuentran entre los más breves de la Escritura, estos dos libros de un solo capítulo son de continua relevancia para la iglesia. La Segunda y la Tercera de Juan reflejan circunstancias similares y tienen contenidos parecidos: En cada libro, el autor advierte contra las divisiones de los maestros falsos o interesados, y ofrece estímulo a los creyentes genuinos. En particular, 2 Juan advierte a sus lectores sobre la recepción de herejes en sus hogares o iglesias, mientras que 3 Juan anima a la comunión con los hermanos cristianos.</p>',
            'temas_estructura' => '<p>La segunda carta de Juan tiene mucho en común con la primera, incluida una advertencia sobre el peligro de los falsos maestros que niegan la encarnación de Jesucristo. Juan anima a los lectores a seguir caminando en el amor, pero les exhorta a discernir en su expresión del amor. El libro puede dividirse en dos partes: permanecer en los mandamientos de Dios (vv. 1-6) y no permanecer con los falsos maestros (vv. 7-13).</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/3-jn/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            64 => 
            array (
                'id' => 65,
                'title' => 'Estudio y análisis del libro de Judas',
                'description' => 'Explora esta llamada a defender la fe contra las falsas enseñanzas, recordando las consecuencias divinas de la incredulidad y la inmoralidad.',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 9,
                'nombre' => 'Judas',
                'abreviatura' => 'Judas',
                'abreviatura_online' => 'jude',
                'num_capitulos' => 1,
                'palabra_clave' => 'Contender por la fe',
                'concepto_principal' => 'Permanecer en la fe pura',
                'autor' => 'Judas',
            'autor_why' => '<p>Un proceso de eliminación indica que el Judas mencionado en el versículo 1 es muy probablemente el hermano de Jesús (Mateo 13:55). Santiago, también mencionado en el versículo 1, es otro medio hermano de Jesús, Santiago el Justo, líder espiritual de la iglesia de Jerusalén y autor de la Epístola de Santiago.</p>',
                'f_redaccion' => '~68 DC',
                'fecha_redaccion_why' => '<p>Judas fue escrito durante la segunda mitad del siglo I, como indica el contenido de la carta, que habla de falsos profetas itinerantes que se introducen en las iglesias, una situación menos probable en el contexto eclesiástico más estructurado del siglo II.
</p><p>
La fecha exacta de Judas depende en cierta medida de la relación literaria con 2 Pedro. Hay una marcada similitud entre Judas 4-19 y 2 Pedro 2:1-3:3, y como la redacción es tan parecida, la mayoría de los estudiosos creen que Pedro tomó prestado de Judas, o que Judas utilizó las palabras de Pedro, o que ambos utilizaron ideas de una fuente común que ya no existe. Si Judas utilizó a 2 Pedro, entonces estaría fechado entre la redacción de 2 Pedro (c. 64-66 d. C.) y c. 80 d. C. Si 2 Pedro utilizó a Judas, entonces Judas podría fecharse entre los años 60 y 65 d.C.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Un número sorprendentemente grande de las epístolas paulinas y no paulinas se enfrentan al problema de los falsos maestros, y casi todas ellas aluden a él. Pero Judas va más allá de todas las demás epístolas del Nuevo Testamento en su implacable y apasionada denuncia de los maestros apóstatas que habían invadido la iglesia.</p>',
            'temas_estructura' => '<p>Esta carta urgente tiene cuatro secciones principales: el propósito de Judas (vv. 1-4); la descripción de los falsos maestros (vv. 5-16); la defensa contra los falsos maestros (vv. 17-23); y la doxología de Judas (vv. 24, 25).
</p><p>
No hay oscuridad en el propósito de Judas. Había querido hablar de la doctrina de la salvación, pero la amenaza de los maestros subversivos le obligó a escribir y exhortar a sus lectores "a contender seriamente por la fe" (v. 3). Así, toda la epístola es una evaluación de los falsos maestros, centrada especialmente en el juicio al que están condenados, y una fuerte advertencia a los destinatarios. Los falsos maestros rechazan la autoridad de Cristo, pero Judas subraya que Jesús es el Señor, ahora y siempre.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/jude/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            65 => 
            array (
                'id' => 66,
                'title' => 'Estudio y análisis del libro de Apocalipsis',
                'description' => 'Estudia las profecías sobre los últimos días, la victoria de Jesucristo sobre el mal, y el establecimiento del reino eterno de paz.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'division_id' => 10,
                'nombre' => 'Apocalipsis',
                'abreviatura' => 'Apoc.',
                'abreviatura_online' => 'rev',
                'num_capitulos' => 22,
                'palabra_clave' => 'La revelación de la venida de Cristo',
                'concepto_principal' => 'Plan para los últimos días y la eternidad',
                'autor' => 'Juan el Amado',
            'autor_why' => '<p>La tradición de que Juan el apóstol escribió el Apocalipsis fue muy extendida y casi indiscutible a lo largo del siglo II d.C. El autor se identifica cinco veces como Juan, y aunque nunca se añade el término "apóstol", parece que era un hombre de prestigio en las iglesias (1:4, 9). Sin embargo, algunas diferencias entre el Apocalipsis y los demás materiales joánicos del Nuevo Testamento han llevado a algunos estudiosos a cuestionar esta tradición. Hay diferencias significativas entre la gramática y el vocabulario griegos del Apocalipsis y los del Evangelio y las epístolas de Juan. Además, hay diferencias teológicas en el énfasis y los otros escritos joánicos evitan el uso del nombre del autor.
</p><p>
Sin embargo, hay que señalar que también hay una serie de similitudes notables entre el Apocalipsis y los otros libros tradicionalmente asociados con el apóstol Juan (por ejemplo, el uso distintivo de términos como "palabra", "cordero" y "verdadero", y el cuidadoso desarrollo de temas opuestos como la luz y la oscuridad, el amor y el odio, el bien y el mal). Además, muchas de las diferencias pueden explicarse por las inusuales circunstancias que rodean a este libro. Así pues, la evidencia interna, aunque problemática, no tiene por qué anular el temprano y sólido testimonio externo del origen apostólico de este importante libro.</p>',
                'f_redaccion' => '~69 DC',
            'fecha_redaccion_why' => '<p>El Apocalipsis se escribió en una época en la que la hostilidad romana hacia el cristianismo estallaba en una persecución abierta (1:9; 2:10, 13). Algunos eruditos creen que hay que dar al libro una fecha temprana durante la persecución de los cristianos bajo Nerón después del incendio de Roma en el año 64 d.C. Señalan que el valor numérico de las letras hebreas de "Nerón César" suma 666, el número de la bestia (13:18). Sin embargo, las pruebas de este tipo son débiles, y es preferible una fecha posterior, cerca del final del reinado del emperador Domiciano (81-96 d. C.), por varias razones. La tradición eclesiástica del siglo II atestigua una fecha posterior durante el reinado de Domiciano. Además, se cree que Juan se trasladó de Jerusalén a Éfeso hacia el año 67 d.C., pero esto no permitiría a Juan establecer un ministerio continuo en Asia durante el reinado de Nerón. Por último, el contenido del Apocalipsis indica que las iglesias asiáticas llevaban varios años de existencia, el tiempo suficiente para haber llegado a un punto de complacencia y decadencia (2:4; 3:1, 15-18).
</p><p>
Por lo tanto, es probable que Juan escribiera este libro en el año 95 o 96 d. C. Se desconoce la fecha de su liberación de Patmos, pero probablemente se le permitió regresar a Éfeso después del reinado de Domiciano. Pasajes como 1:11; 22:7, 9, 10, 18, 19 sugieren que el libro fue terminado en Patmos antes de la liberación de Juan.</p>',
                'descripcion' => '',
                'introduccion' => '<p>Así como el Génesis es el libro de los comienzos, el Apocalipsis es el libro de la consumación. En él, el programa divino de redención se lleva a cabo, y el santo nombre de Dios es vindicado ante toda la creación.
</p><p>
La palabra "revelación" es una traducción de la palabra griega de la que deriva el término "apocalipsis" y se refiere a una revelación de los propósitos secretos de Dios. En el Apocalipsis, esto implicaba una orden al autor para que escribiera sobre los planes de Dios para su propio día y para el futuro.</p>',
            'temas_estructura' => '<p>Aunque el libro incluye partes que siguen la forma epistolar (1:4-3:22), gran parte del Apocalipsis está escrito en forma de literatura apocalíptica (cf. Daniel y Zacarías) y se refiere a sí mismo como un libro profético (1:3; 22:7, 10, 18, 19). Los tres movimientos principales de esta profunda revelación se recogen en 1:19: "las cosas que habéis visto" (cap. 1); "las cosas que son" (caps. 2 y 3); y "las cosas que sucederán después de esto" (caps. 4-22).
</p><p>
El número "siete" adquiere un profundo significado en el Apocalipsis (aparece cincuenta y dos veces). Los tres ciclos de siete juicios de los capítulos 6-16 consisten en siete sellos, siete trompetas y siete copas. Debido al rico simbolismo del libro del Apocalipsis, los enfoques interpretativos de la comunidad cristiana han diferido radicalmente.</p>',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/nt/rev/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            66 => 
            array (
                'id' => 67,
                'title' => 'Estudio y análisis del libro de 1 Nefi',
                'description' => 'Explora el viaje liderado por Lehi desde Jerusalén al continente americano, enfrentando desafíos y recibiendo revelaciones divinas.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => '1 Nefi',
                'abreviatura' => '1 Ne.',
                'abreviatura_online' => '1-ne',
                'num_capitulos' => 22,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Nefi 1',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/1-ne/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            67 => 
            array (
                'id' => 68,
                'title' => 'Estudio y análisis del libro de 2 Nefi',
                'description' => 'Profundiza en las enseñanzas de Nefi sobre la obediencia, la redención a través de Cristo, y citas importantes del profeta Isaías.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => '2 Nefi',
                'abreviatura' => '2 Ne.',
                'abreviatura_online' => '2-ne',
                'num_capitulos' => 33,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Nefi 1',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/2-ne/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            68 => 
            array (
                'id' => 69,
                'title' => 'Estudio y análisis del libro de Jacob',
                'description' => 'Escudriña las predicaciones de Jacob sobre la expiación de Cristo, el recogimiento, la importancia de la castidad y contra la avaricia.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => 'Jacob',
                'abreviatura' => 'Jacob',
                'abreviatura_online' => 'jacob',
                'num_capitulos' => 7,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Jacob',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/jacob/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            69 => 
            array (
                'id' => 70,
                'title' => 'Estudio y análisis del libro de Enós',
                'description' => 'Descubre la intensa oración de Enós por sí mismo, su pueblo y sus enemigos, y su profunda conversión y compromiso con la obra misional.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => 'Enós',
                'abreviatura' => 'Enós',
                'abreviatura_online' => 'enos',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Enos',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/enos/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            70 => 
            array (
                'id' => 71,
                'title' => 'Estudio y análisis del libro de Jarom',
                'description' => 'Lee el breve relato de Jarom sobre la perseverancia de su pueblo en la fe, a pesar de las tensiones constantes con sus enemigos.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => 'Jarom',
                'abreviatura' => 'Jarom',
                'abreviatura_online' => 'jarom',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Jarom',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/jarom/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            71 => 
            array (
                'id' => 72,
                'title' => 'Estudio y análisis del libro de Omni',
                'description' => 'Estudia la introducción de Mormón a sus escritos, donde explica su propósito y la transición entre el registro de las planchas menores y mayores.',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 11,
                'nombre' => 'Omni',
                'abreviatura' => 'Omni',
                'abreviatura_online' => 'omni',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/omni/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            72 => 
            array (
                'id' => 73,
                'title' => 'Estudio y análisis del libro de Palabras de Mormón',
                'description' => 'Encuentra la introducción de Mormón a sus escritos, explicando su propósito y la transición entre el registro de los pequeños y grandes planchas.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 12,
                'nombre' => 'Palabras de Mormón',
                'abreviatura' => 'P. de Morm.',
                'abreviatura_online' => 'w-of-m',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Mormón',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/w-of-m/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            73 => 
            array (
                'id' => 74,
                'title' => 'Estudio y análisis del libro de Mosíah',
                'description' => 'Sumérgete en la narrativa de un liderazgo justo, misiones redentoras entre los lamanitas, y la transición a un sistema de jueces guiado por principios divinos.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 13,
                'nombre' => 'Mosíah',
                'abreviatura' => 'Mos.',
                'abreviatura_online' => 'mosiah',
                'num_capitulos' => 29,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/mosiah/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            74 => 
            array (
                'id' => 75,
                'title' => 'Estudio y análisis del libro de Alma',
                'description' => 'Descubre los conflictos espirituales y batallas en la vida de Alma, incluyendo su ministerio, enfrentamientos y misiones a los lamanitas.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 13,
                'nombre' => 'Alma',
                'abreviatura' => 'Alma',
                'abreviatura_online' => 'alma',
                'num_capitulos' => 63,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/alma/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            75 => 
            array (
                'id' => 76,
                'title' => 'Estudio y análisis del libro de Helamán',
                'description' => 'Adéntrate en la historia de los nefitas y famanitas, marcada por la guerra, la corrupción política y los llamados a la fe y al arrepentimiento.




',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 13,
                'nombre' => 'Helamán',
                'abreviatura' => 'Hel.',
                'abreviatura_online' => 'hel',
                'num_capitulos' => 16,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/hel/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            76 => 
            array (
                'id' => 77,
                'title' => 'Estudio y análisis del libro de 3 Nefi',
                'description' => 'Experimenta la culminación de las profecías nefitas con la visita de Cristo resucitado a las Américas, enseñando, sanando y estableciendo su Iglesia.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 13,
                'nombre' => '3 Nefi',
                'abreviatura' => '3 Ne.',
                'abreviatura_online' => '3-ne',
                'num_capitulos' => 30,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/3-ne/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            77 => 
            array (
                'id' => 78,
                'title' => 'Estudio y análisis del libro de 4 Nefi',
                'description' => 'Atestigua el periodo de paz y rectitud tras la visita de Cristo, seguido por la decadencia y división que llevaron a la desintegración de la sociedad nefita.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 13,
                'nombre' => '4 Nefi',
                'abreviatura' => '4 Ne.',
                'abreviatura_online' => '4-ne',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => '',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/4-ne/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            78 => 
            array (
                'id' => 79,
                'title' => 'Estudio y análisis del libro de Mormón',
                'description' => 'Asiste al relato de Mormón sobre la caída final de los nefitas, compilando y preservando sus escrituras frente a la inminente extinción de su pueblo.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 14,
                'nombre' => 'Mormón',
                'abreviatura' => 'Morm.',
                'abreviatura_online' => 'morm',
                'num_capitulos' => 9,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Mormón, Moroni',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/morm/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            79 => 
            array (
                'id' => 80,
                'title' => 'Estudio y análisis del libro de Éter',
                'description' => 'Recorre la historia de los Jareditas, desde su origen en la Torre de Babel hasta su autodestrucción, destacando temas de orgullo y caída.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 15,
                'nombre' => 'Éter',
                'abreviatura' => 'Éter',
                'abreviatura_online' => 'ether',
                'num_capitulos' => 15,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Eter, Moroni',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/ether/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            80 => 
            array (
                'id' => 81,
                'title' => 'Estudio y análisis del libro de Moroni',
                'description' => 'Concluye con las reflexiones y enseñanzas de Moroni, junto a las de su padre Mormón, sobre las ordenanzas, la fe, la esperanza y la caridad.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'division_id' => 15,
                'nombre' => 'Moroni',
                'abreviatura' => 'Moro.',
                'abreviatura_online' => 'moro',
                'num_capitulos' => 10,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Moroni',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/bofm/moro/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            81 => 
            array (
                'id' => 82,
                'title' => 'Estudio y análisis del libro de Doctrina y Convenios',
                'description' => 'Explora las revelaciones, dadas a José Smith y otros líderes, que orientan la organización y doctrina de La Iglesia de Jesucristo de los Santos de los Últimos Días.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 4,
                'division_id' => 16,
                'nombre' => 'Secciones',
                'abreviatura' => 'DyC',
                'abreviatura_online' => 'dc',
                'num_capitulos' => 138,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'José Smith, Brigham Young, Joseph F. Smith',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/dc-testament/dc/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            82 => 
            array (
                'id' => 83,
                'title' => 'Estudio y análisis del libro de Declaraciones oficiales',
                'description' => 'Reflexiona sobre pronunciamientos que abordan temas contemporáneos y ajustes doctrinales, reflejando la revelación continua en la Iglesia.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 4,
                'division_id' => 17,
                'nombre' => 'Declaraciones oficiales',
                'abreviatura' => 'DO',
                'abreviatura_online' => 'od',
                'num_capitulos' => 2,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Wilford Woodruf, Spencer W. Kimball',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/dc-testament/od/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            83 => 
            array (
                'id' => 84,
                'title' => 'Estudio y análisis del libro de Moisés',
                'description' => 'Descubre los relatos de la creación, el Edén y los primeros profetas, ampliando la comprensión bíblica desde la perspectiva de la revelación.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'division_id' => 18,
                'nombre' => 'Moisés',
                'abreviatura' => 'Moisés',
                'abreviatura_online' => 'moses',
                'num_capitulos' => 8,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Moisés',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/pgp/moses/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            84 => 
            array (
                'id' => 85,
                'title' => 'Estudio y análisis del libro de Abraham',
                'description' => 'Explora las enseñanzas y visiones de Abraham, incluyendo detalles sobre la creación, el convenio abrahámico y su relevancia en el evangelio eterno.',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'division_id' => 18,
                'nombre' => 'Abraham',
                'abreviatura' => 'Abr.',
                'abreviatura_online' => 'abr',
                'num_capitulos' => 5,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Abraham',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/pgp/abr/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            85 => 
            array (
                'id' => 86,
                'title' => 'Estudio y análisis del libro de José Smith-Mateo',
                'description' => 'Revisita el discurso de Jesús sobre los últimos días desde la Traducción de José Smith, ofreciendo perspectivas ampliadas sobre la segunda venida.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'division_id' => 19,
                'nombre' => 'José Smith-Mateo',
                'abreviatura' => 'JS-M',
                'abreviatura_online' => 'js-m',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'Mateo',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/pgp/js-m/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            86 => 
            array (
                'id' => 87,
                'title' => 'Estudio y análisis del libro de José Smith-Historia',
                'description' => 'Conoce el relato de la Primera Visión de José Smith, el origen del Libro de Mormón y los eventos fundacionales de La Iglesia de Jesucristo de los Santos de los Últimos Días.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'division_id' => 20,
                'nombre' => 'José Smith-Historia',
                'abreviatura' => 'JS-H',
                'abreviatura_online' => 'js-h',
                'num_capitulos' => 1,
                'palabra_clave' => '',
                'concepto_principal' => '',
                'autor' => 'José Smith',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/pgp/js-h/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            87 => 
            array (
                'id' => 88,
                'title' => 'Estudio y análisis de los Artículos de Fe',
                'description' => 'Explora los trece Artículos de Fe, resumen de creencias fundamentales de La Iglesia de Jesucristo de los Santos de los Últimos Días.





',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'division_id' => 20,
                'nombre' => 'Artículos de Fe',
                'abreviatura' => 'AdeF',
                'abreviatura_online' => 'a-of-f',
                'num_capitulos' => 1,
                'palabra_clave' => 'Creemos',
                'concepto_principal' => 'Declaración de creencias',
                'autor' => 'José Smith',
                'autor_why' => '',
                'f_redaccion' => '',
                'fecha_redaccion_why' => '',
                'descripcion' => '',
                'introduccion' => '',
                'temas_estructura' => '',
                'sumario' => '',
                'url' => 'https://www.churchofjesuschrist.org/study/scriptures/pgp/a-of-f/1?lang=spa',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
        ));
        
        
    }
}