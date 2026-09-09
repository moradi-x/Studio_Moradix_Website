import MainLayout from "../Layouts/MainLayout";
import FadeIn from "../Components/FadeIn";
import ProjectCard from "../Components/ProjectCard";


export default function Projects({ projects }) {


    return (

        <MainLayout>


            <FadeIn>

                <section className="px-8 py-24">

                    <div className="max-w-5xl mx-auto">

                        <p className="uppercase tracking-widest text-sm mb-6">
                            Portfolio
                        </p>


                        <h1 className="text-5xl font-bold">
                            Selected Projects
                        </h1>


                        <p className="mt-6 text-xl max-w-2xl">
                            A collection of websites, brands and digital
                            experiences created by Studio Moradix.
                        </p>


                    </div>

                </section>

            </FadeIn>



            <section className="px-8 pb-24">

                <div className="max-w-5xl mx-auto">


                    <div className="grid md:grid-cols-2 gap-8">


                        {projects.map((project) => (

                            <ProjectCard

                                key={project.id}

                                title={project.title}

                                description={project.description}

                                image={project.image}

                                technology={project.technology}

                                slug={project.slug}

                            />

                        ))}


                    </div>


                </div>


            </section>


        </MainLayout>

    );

}