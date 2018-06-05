<?php

namespace MaremmaCinghialeBundle\Controller;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping\SqlResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use MaremmaCinghialeBundle\Entity\Evento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function searchAction()
    {
        return $this->render('MaremmaCinghialeBundle:Search:search.html.php', array(
            // ...
        ));
    }


    public function searchEventsAction($sdate = '2017-11-01')
    {

        //$sdate = $year.'-'.$month.'-'.$list_day;
        $date = date_create_from_format('Y-m-d',$sdate);

        $sqlDate = date_format($date,'Y-m-d');
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getEntityManager();




        $sql = "SELECT  evento.id,evento.titolo,evento.data_evento,evento.descrizione,
                        evento.importo,evento.url_foto, squadra.url_foto as url_foto_squadra,
                        squadra.nome,squadra.numero,squadra.catture_cinghiali, atc.nome_atc,
                        atc.sigla_atc,province.nome_provincia,province.sigla_provincia,regioni.regione
                FROM evento
				INNER JOIN squadra on squadra.id = evento.id_squadra
				INNER JOIN atc on atc.id =squadra.id_atc
				INNER JOIN territorio on territorio.id=atc.id_territorio
                INNER JOIN province on province.id= territorio.id_provincia
                INNER JOIN regioni on regioni.id=province.id_regione
				WHERE DATE_FORMAT(evento.data_evento,'%Y-%m-%d')='".$sqlDate."'";

        $srm = new  SqlResultSetMapping();

        //$nativeQuery = $em->createQuery($sql);
        //$eventi = $nativeQuery->getArrayResult();
        //='".$sqlDate."'";

        $criteria = Criteria::create();
        $criteria->where($criteria->expr()->eq('data_evento', $sqlDate))->orderBy(array("id" => $criteria::DESC));

        $repo = $this->getDoctrine()->getRepository(Evento::class);

        //$eventi = $repo->findBy(array('totUsersEvento'=>0 ));

        $eventi = $repo->findAll();


        //echo dump($eventi);
        //return new Response('numero eventi '.count($eventi));
        return $this->render('MaremmaCinghialeBundle:Search:searchEvents.html.twig', array(
            'eventi'=>$eventi,'numEventi'=>count($eventi)
        ));
        /*return $this->render('MaremmaCinghialeBundle:Search:searchEvents.html.php', array(
            'eventi'=>$eventi
        ));*/
    }

}
