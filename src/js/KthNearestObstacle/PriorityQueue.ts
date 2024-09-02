import { PriorityQueue } from '@datastructures-js/priority-queue';

const numbers = [3, -2, 15, 0, -1, -5, 4];

// Priority Queue

const pq = new PriorityQueue((a, b) => a - b, numbers);
console.log('Priority Queue');
console.log('pq.size = ', pq.size());
console.log('pq.toArray = ', pq.toArray());
console.log('pq.back => get the value with lowest priority = ', pq.back());
console.log('pq.front => get the value with highest priority = ', pq.front());
pq.enqueue(-6);
console.log('pq.enqueue = will add value to the queue', pq.front());
console.log('-------************--------');
pq.dequeue();
console.log(pq.toArray());
console.log('-------************--------');

console.log('pq.dequeue = will remove the item with highest priority', pq.front());
console.log('pq.toArray = ', pq.toArray());
console.log('pq.isEmpty = ', pq.isEmpty());
console.log('pq.pop = similar to dequeue', pq.pop());
pq.push(-7);
console.log('pq.push = similar to enqueue', pq.front());
pq.remove((item) => item === 0);
console.log('pq.remove(cb = (value: number) => boolean) = ', pq.toArray());
pq.clear();
console.log('pq.clear = ', pq.toArray());
