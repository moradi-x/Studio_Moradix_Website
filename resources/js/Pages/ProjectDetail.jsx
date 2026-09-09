import MainLayout from "../Layouts/MainLayout";
import FadeIn from "../Components/FadeIn";


export default function ProjectDetail({ project }) {


    return (

        <MainLayout>


            <FadeIn>


                <section className="px-8 py-24">


                    <div className="max-w-5xl mx-auto">


                        <p className="uppercase tracking-widest text-sm mb-6">
                            {project.category}
                        </p>



                        <h1 className="text-6xl font-bold">
                            {project.title}
                        </h1>



                        <p className="mt-6 text-xl max-w-3xl">
                            {project.description}
                        </p>



                        {project.image && (

                            <img

                                src={`/storage/${project.image}`}

                                alt={project.title}

                                className="mt-12 rounded-3xl w-full"

                            />

                        )}



                    </div>


                </section>


            </FadeIn>




            <section className="px-8 pb-24">


                <div className="max-w-5xl mx-auto grid md:grid-cols-3 gap-10">



                    <div>

                        <p className="text-sm uppercase tracking-widest">
                            Client
                        </p>

                        <p className="mt-3 font-bold">
                            {project.client}
                        </p>

                    </div>



                    <div>

                        <p className="text-sm uppercase tracking-widest">
                            Technology
                        </p>

                        <p className="mt-3 font-bold">
                            {project.technology}
                        </p>

                    </div>



                    <div>

                        <p className="text-sm uppercase tracking-widest">
                            Category
                        </p>

                        <p className="mt-3 font-bold">
                            {project.category}
                        </p>

                    </div>


                </div>


            </section>




            <section className="px-8 pb-24">


                <div className="max-w-5xl mx-auto">


                    <h2 className="text-4xl font-bold mb-8">
                        About This Project
                    </h2>


                    <p className="text-xl leading-relaxed whitespace-pre-line">
                        {project.content}
                    </p>


                    <div className="mt-10 flex gap-5">


                        {project.demo_url && (

                            <a

                                href={project.demo_url}

                                target="_blank"

                                className="px-6 py-3 bg-black text-white rounded-full"

                            >

                                Live Demo

                            </a>

                        )}



                        {project.github_url && (

                            <a

                                href={project.github_url}

                                target="_blank"

                                className="px-6 py-3 border rounded-full"

                            >

                                Github

                            </a>

                        )}



                    </div>


                </div>


            </section>



        </MainLayout>

    );

}