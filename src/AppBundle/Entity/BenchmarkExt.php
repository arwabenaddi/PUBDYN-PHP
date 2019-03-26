<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BenchmarkExt
 *
 * @ORM\Table(name="benchmark_ext", indexes={@ORM\Index(name="fk_benchmark_ext_benchmark1_idx", columns={"id_benchmark"})})
 * @ORM\Entity
 */
class BenchmarkExt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_benchmark_ext", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBenchmarkExt;

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
     * Set idBenchmarkExt.
     *
     * @param int $idBenchmarkExt
     *
     * @return BenchmarkExt
     */
    public function setIdBenchmarkExt($idBenchmarkExt)
    {
        $this->idBenchmarkExt = $idBenchmarkExt;

        return $this;
    }

    /**
     * Get idBenchmarkExt.
     *
     * @return int
     */
    public function getIdBenchmarkExt()
    {
        return $this->idBenchmarkExt;
    }

    /**
     * Set idBenchmark.
     *
     * @param \AppBundle\Entity\Benchmark $idBenchmark
     *
     * @return BenchmarkExt
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
}
