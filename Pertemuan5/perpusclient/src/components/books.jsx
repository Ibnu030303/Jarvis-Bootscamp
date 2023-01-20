import React from 'react'

const Books = ({books}) => {
    return (
        <div className="container pt-5"> 
            <div className="row justify-content-center">
                {
                    books.map((books) => (
                    <div className="col-auto">
                    <div className="card mb-3" style={{maxWidth: 540}}>
                        <div className="row g-0">
                        <div className="col-md-4">
                        <img src="https://img.freepik.com/premium-vector/heap-textbooks-cartoon-pile-objects-academic-knowledge-cover-vector_81894-5448.jpg?w=2000" className="img-fluid rounded-start" alt="..." />
                        </div>
                        <div className="col-md-8">
                        <div className="card-body">
                            <h5 className="card-title">{books.title}</h5>
                            <p className="card-text">{books.desc}</p>
                            <p className="card-text"><small className="text-muted">{books.date}</small></p>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                 ))
                }

            </div>
        </div>
       
    )
}

export default Books