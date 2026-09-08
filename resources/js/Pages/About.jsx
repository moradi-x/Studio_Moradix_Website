import MainLayout from "../Layouts/MainLayout";


export default function About(){

    return (

        <MainLayout>


            <section className="px-8 py-24">

                <div className="max-w-5xl">

                    <p className="uppercase tracking-widest text-sm">
                        About
                    </p>


                    <h1 className="text-6xl font-bold mt-6">
                        We create digital experiences.
                    </h1>


                    <p className="mt-8 text-xl max-w-3xl">
                        Studio Moradix is a digital studio focused on
                        web development, design and brand experiences
                        for modern businesses.
                    </p>


                </div>


            </section>


        </MainLayout>

    );
}