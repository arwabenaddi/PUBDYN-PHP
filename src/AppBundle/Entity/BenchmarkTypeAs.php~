<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BenchmarkTypeAs
 *
 * @ORM\Table(name="benchmark_type_as", indexes={@ORM\Index(name="fk_benchmark_type_as_type_appartenance_sectorielle1_idx", columns={"id_type_as_in"}), @ORM\Index(name="fk_benchmark_type_as_type_appartenance_sectorielle2_idx", columns={"id_type_as_out"}), @ORM\Index(name="IDX_B22E4B383739F4D9", columns={"id_benchmark"})})
 * @ORM\Entity
 */
class BenchmarkTypeAs
{
    /**
     * @var \AppBundle\Entity\Benchmark
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Benchmark")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_benchmark", referencedColumnName="id_benchmark")
     * })
     */
    private $idBenchmark;

    /**
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_as_in", referencedColumnName="id")
     * })
     */
    private $idTypeAsIn;

    /**
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_as_out", referencedColumnName="id")
     * })
     */
    private $idTypeAsOut;



    /**
     * Set idBenchmark.
     *
     * @param \AppBundle\Entity\Benchmark $idBenchmark
     *
     * @return BenchmarkTypeAs
     */
    public function setIdBenchmark(\AppBundle\Entity\Benchmark $idBenchmark)
    {
        $this->idBenchmark = $idBenchmark;

        return $this;
    }

    /**
     * Get idBenchmark.
     *
     * @return \AppBundle\Entity\Benchmark
     */
    public function getIdBenchmark()
    {
        return $this->idBenchmark;
    }

    /**
     * Set idTypeAsIn.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAsIn
     *
     * @return BenchmarkTypeAs
     */
    public function setIdTypeAsIn(\AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAsIn)
    {
        $this->idTypeAsIn = $idTypeAsIn;

        return $this;
    }

    /**
     * Get idTypeAsIn.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle
     */
    public function getIdTypeAsIn()
    {
        return $this->idTypeAsIn;
    }

    /**
     * Set idTypeAsOut.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAsOut
     *
     * @return BenchmarkTypeAs
     */
    public function setIdTypeAsOut(\AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAsOut)
    {
        $this->idTypeAsOut = $idTypeAsOut;

        return $this;
    }

    /**
     * Get idTypeAsOut.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle
     */
    public function getIdTypeAsOut()
    {
        return $this->idTypeAsOut;
    }
}
